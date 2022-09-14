<?php

namespace App\Theme;

use App\Base\Singleton;

class Theme extends Singleton
{

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $resource_dir;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var array asset mix manifest
     */
    public $manifest = [];

    /**
     * @var array
     */
    public $stylesheet_files = [];

    /**
     * @var array
     */
    public $scripts_files = [];

    /**
     * @var array
     */
    public $scripts_urls = [];

    protected function __construct()
    {
        $this->setup();
        $this->set_version();
        $this->set_mix_manifest();
        add_action('init', [$this, 'register_option_pages']);
        add_action('wp_head', [$this, 'js_vars']);
        add_action('after_setup_theme', [$this, 'setup_theme']);
        add_action('wp_enqueue_scripts', [$this, 'load_assets'], 10);
        add_filter('acf/fields/google_map/api', [$this, 'google_map_api_key']);

        add_filter('auto_update_plugin', '__return_false');
        add_filter('auto_update_theme', '__return_false');
        add_filter('use_block_editor_for_post', '__return_false', 10);
        add_action('init', [$this, 'user_roles']);
       # add_action('init', [$this, 'add_user_roles']);

        add_filter('upload_mimes', [$this, 'mimet_types']);
    }

    public function google_map_api_key($api)
    {
        $api['key'] = config('app.google_map_api_key'); 
        return $api;
    }

    private function setup() {
        $this->resource_dir = config('app.assets.build_dir');
        $this->prefix = config('app.assets.prefix', app_prefix());
        $this->stylesheet_files = config('app.assets.stylesheet_files');
        $this->scripts_files = config('app.assets.scripts_files');
        $this->scripts_urls = config('app.assets.scripts_urls');
    }

    /**
     * Read version from composer.json
     * @return void
     */
    private function set_version()
    {
        $content = file_get_contents(get_template_directory() . DIRECTORY_SEPARATOR . 'composer.json');
        $content = json_decode($content, true);
        $this->version = $content['version'] ?? time();
    }

    /**
     * Read mix-manifest for compiled assets
     * @return void
     */
    private function set_mix_manifest()
    {
        $content = file_get_contents(get_template_directory() . DIRECTORY_SEPARATOR . 'mix-manifest.json');
        $content = json_decode($content, true);
        $this->manifest = $content;
    }

    /**
     * setup theme
     * @return void
     */
    public function setup_theme()
    {
        load_theme_textdomain(texdomain(), get_template_directory() . DIRECTORY_SEPARATOR . 'languages');
        $this->register_nav_menus();
        $this->register_support();
    }

    /**
     *  register_nav_menus
     *
     * @see https://codex.wordpress.org/Function_Reference/register_nav_menu
     */
    public function register_nav_menus()
    {
        register_nav_menus(config('app.nav_menus', []));
    }

    /**
     *  register_option_pages
     *
     * @see https://www.advancedcustomfields.com/resources/options-page/
     */
    public function register_option_pages()
    {
        if (!function_exists('acf_add_options_page'))
            return;
	
		// options
        acf_add_options_page(config('app.admin_option_page', []));
    }

    /**
     *  support
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/
     */
    public function register_support()
    {
        foreach (config('app.supports', []) as $feature => $args) {
            if (!$args) {
                add_theme_support($feature);
            } else {
                add_theme_support($feature, $args);
            }
        }
    }

    /**
     * register some js variables
     *
     * @see https://codex.wordpress.org/Function_Reference/wp_localize_script
     */
    public function js_vars()
    {

        $APP_DATA = apply_filters(app_prefix() .'_js_app_data', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'themeUri' => get_template_directory_uri()
        ]);

        ?>
            <script type="text/javascript">
			    window.APP_DATA = <?php echo wp_json_encode($APP_DATA); ?>;
		    </script>
        <?php

    }

    public function load_assets()
    {
        $this->load_stylesheet_files();
        $this->load_scripts_files();
    }

    protected function load_stylesheet_files()
    {
        $uri = get_template_directory_uri() . '/' . $this->resource_dir;
        $path = get_template_directory() . DIRECTORY_SEPARATOR . $this->resource_dir;

        foreach ($this->stylesheet_files as $key => $file) {
            $mix_file = $this->manifest[$file] ?? $file;
            if (file_exists($path . $file)) {
                wp_enqueue_style(
                    $this->get_asset_handle($key, 'style'), // handle
                    $uri . $mix_file, // src
                    [], // deps
                    $this->version, // version
                    'all' // media
                );
            }
        }
    }

    protected function load_scripts_files()
    {
        foreach ($this->scripts_urls as $url => $options) {
            if (is_array($options['params'])) {
                $url = $url . '?' . http_build_query($options['params']);
            }
            $handle = $this->get_asset_handle($options['key']);
            wp_register_script(
                $handle, // handle
                $url, // src
                $options['deps'] ?? [], // deps
                null, // version
                $options['in_footer'] // in_footer
            );

            if (isset($options['include']) && $options['include']) {
                wp_enqueue_script($handle);
            }
        }

        $uri = get_template_directory_uri() . '/' . $this->resource_dir;
        $path = get_template_directory() . DIRECTORY_SEPARATOR . $this->resource_dir;

        foreach ($this->scripts_files as $file => $options) {
            $mix_file = $this->manifest[$file] ?? $file;

            if (file_exists($path . $file)) {
                $handle = $this->get_asset_handle($options['key']);
                wp_register_script(
                    $handle, // handle
                    $uri . $mix_file, // src
                    $options['deps'] ?? [], // deps
                    $this->version, // version
                    $options['in_footer'] // in_footer
                );

                if (isset($options['include']) && $options['include']) {
                    wp_enqueue_script($handle);
                }
            }
        }
    }

    /**
     * @param string $key
     * @param string $type
     * @return string
     */
    public function get_asset_handle($key, $type = 'script')
    {
        if ($type === 'script') {
            return $this->prefix . '-scripts-url-' . $key;
        }

        if ($type === 'style'){
            return $this->prefix . '-style-' . $key;
        }

        return '';
    }

    public function pagination($query = false){
        if($query){
            $GLOBALS['wp_query'] = $query;
        }
        the_posts_pagination( [
            'mid_size'  => 2,
            'prev_text' => '<i class="fas fa-angle-left"></i>',
            'next_text' => '<i class="fas fa-angle-right"></i>',
            'screen_reader_text' => '&nbsp;',
         ] );
    }

    public function user_roles()
     {
          //remove default wp roles
          remove_role('subscriber');
          remove_role('author');
          remove_role('editor');
          remove_role('contributor');
          #remove_role('customer');
     }

     public function add_user_roles()
     {
        add_role('customer', 'Customer', ['read' => true, 'level_0' => true]);
     }

     public function mimet_types($mimes)
     {
        $mimes['svg'] = 'image/svg+xml'; 
        return $mimes;
     }
}