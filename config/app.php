<?php
return [
    "prefix" => "app",
    'timezone' => 'Europe/Tirane',
    
    "assets" => [
        "prefix" => "app",
        "build_dir" => "dist",
        "stylesheet_files" => [
            '/css/app.css'
        ],
        "override_scripts" => [
        ],
        "scripts_files" => [
            '/js/app.js' => [
                'key' => 'app',
                'in_footer' => true,
                'deps' => ['jquery'],
                'include'=> true,
            ],
        ],
        "scripts_urls" => [
            'https://maps.googleapis.com/maps/api/js' => [
                'key' => 'google-maps',
                'params' => [
                    'v' => '3.exp',
                    'key' => '',
                    'libraries' => 'places',
                    'language' => 'en',
                ],
                'include'=> false,
                'in_footer' => true,
            ]
        ],
    ],
    'google_map_api_key' => '',    
];