<!DOCTYPE html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('name') ?></title>
        <link rel="stylesheet" href="/resources/css/app.css" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="app">
          <?php view('common.navbar'); ?>