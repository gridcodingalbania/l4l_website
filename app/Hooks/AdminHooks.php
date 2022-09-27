<?php
namespace App\Hooks;

use App\Base\Singleton;

use App\Hooks\Admin\ApplicationColumns;


class AdminHooks extends Singleton
{
    public function __construct()
    {
        ApplicationColumns::init();
    }
}
