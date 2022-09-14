const mix = require('laravel-mix');
const path = require('path')

const publicPath = path.resolve('./dist').replace(path.resolve('../../../'), '');

mix
  .setPublicPath('dist')
  .setResourceRoot('../../dist/')
  .js('resources/js/app.js', 'dist/js').react()
  .postCss('resources/css/app.css', 'dist/css', [
    require('tailwindcss'),
  ])
  .webpackConfig((webpack) => ({
    output: {
      publicPath: `${publicPath}${publicPath.endsWith('/') ? '' : '/'}`,
      chunkFilename: 'js/[name].js',
    },
    plugins: [
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
      })
    ],
    externals: {
      jquery: 'jQuery',
    }
  }))
  .disableNotifications()
  .version();