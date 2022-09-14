<!DOCTYPE html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('name') ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="app">
        <?php
            $args = [
                'var1' => 'test',
                'var2' => 'asdasdas'
            ]
        ?>
          <?php view('common.navbar', $args); ?>