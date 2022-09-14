<?php
namespace App;

use App;
use App\Base\Singleton;
use App\Base\Application;

use App\Theme\Theme;
use App\Theme\Brand;
use App\Theme\Header;
use App\Theme\Language;

use App\Base\Bootstrap\RegisterPostTypes;
use App\Base\Bootstrap\RegisterTaxonomies;
use App\Base\Bootstrap\RegisterAjaxHooks;

use App\Hooks\WoocommerceHooks;
use App\Hooks\RegisterHooks;

class Init extends Singleton
{
    protected function __construct()
    {
        Application::init();
        Theme::init();
        Brand::init();
        Header::init();
        Language::init();
        RegisterPostTypes::init();
        RegisterTaxonomies::init();
        RegisterAjaxHooks::init();

        WoocommerceHooks::init();
        RegisterHooks::init();
    }
}