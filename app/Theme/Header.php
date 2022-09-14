<?php
namespace App\Theme;

use App\Base\Singleton;

class Header extends Singleton
{
    protected function __construct()
    {
        add_filter(app_prefix() . '_js_app_data', function ($data) {
            return $data;
        });
    }
}
