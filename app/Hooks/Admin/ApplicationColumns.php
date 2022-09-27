<?php
namespace App\Hooks\Admin;

use App\Base\Singleton;

class ApplicationColumns extends Singleton
{   
    protected function __construct()
    {
        add_filter('manage_application_posts_columns', [$this, 'define_columns'], 20);
        add_filter('manage_edit-application_sortable_columns', [$this, 'define_sortable_columns']);
        add_action('manage_application_posts_custom_column', [$this, 'render_columns'], 10, 2);
    }

    public function define_columns(array $columns)
    {
        $columns['first_name'] = __('Nome', 'app');
        $columns['last_name'] = __('Cognome', 'app');
        $columns['email'] = __('Email', 'app');
        return $columns;
    }

   
    public function define_sortable_columns(array $columns)
    {
        return $columns;
    }

    public function render_columns($column, $post_id)
    {
        if('first_name' == $column){
            echo get_post_meta($post_id, 'first_name', true);
        }

        if('last_name' == $column){
            echo get_post_meta($post_id, 'last_name', true);
        }
        
        if('email' == $column){
            echo get_post_meta($post_id, 'email', true);
        }
    }

    public function renderCompanyName($post_id)
    {
        $user_id = get_post_field ('post_author', $post_id);
        $profile = get_user_profile($user_id);
        if($profile){
            echo $profile->company;
        }
    }
}
