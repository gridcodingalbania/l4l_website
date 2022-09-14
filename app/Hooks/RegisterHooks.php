<?php
namespace App\Hooks;

use App\Base\Singleton;

class RegisterHooks extends Singleton
{
    public function __construct()
    {
        add_action('woocommerce_register_form', [$this, 'form_fields'], 15);
    }

    public function form_fields()
    {
        $fields = [
            'full_name' => [
                'type' => 'text',
                'label' => __( 'Full name', ' app' ),
                'placeholder' => '',
                'required' => true
            ]
        ];

        foreach($fields as $key => $field_args){
            woocommerce_form_field($key, $field_args);
        }
    }
}