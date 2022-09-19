<?php
/**
 * Template Name: Login
 */
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php view('login.login'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>