<?php

namespace App\Database\PostTypes;

use App\Base\Database\PostType;

class Application
{
    public function create()
    {
        return PostType::create()
            ->slug('application')
            ->name(__('Applications', 'app'))
            ->public(false)
            ->publicly_queryable(true)
            ->has_archive(false)
            ->hierarchical(false)
            ->supports(['title'])
            ->show_in_rest(false)
            ->register();
    }
}
