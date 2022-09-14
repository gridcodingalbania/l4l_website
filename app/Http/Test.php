<?php
namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;

class Test extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        wp_send_json([
            'error' => false,
            'message' => '',
        ]);
    }
}