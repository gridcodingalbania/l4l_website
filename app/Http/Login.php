<?php

namespace App\Http;

use App\Base\Ajax;
use Symfony\Component\HttpFoundation\Request;
use Rakit\Validation\Validator;

class Login extends Ajax
{
    public $protection = ['public', 'private'];

    public function handle(Request $request)
    {
        $data = request()->get('data');
        if (!$data) {
            return;
        }
        $data['privacy'] = $data['privacy'] == 'true' ? true : false;
        $validator = new Validator;
        $validator->setMessages([
            'email' => 'email obligatorio',
            'password' => 'obligatorio'
        ]);
        $validation = $validator->validate($data, [
            'email' => 'required|email',
            'password' => 'required|boolean|in:true'
        ]);
        if ($validation->fails()) {
            return ([
                'errors' => $validation->errors()->firstOfAll()
            ]);
        }
        $post_id = wp_insert_post([
            'post_type' => 'application',
            'post_title' => $data['email'],
            'post_status' => 'publish'
        ]);
        if ($post_id && !is_wp_error($post_id)) {
            foreach ($data as $key => $value) {
                update_post_meta($post_id, $key, $value);
            }
            wp_send_json([
                'success' => true
            ]);
        }
    }
}
