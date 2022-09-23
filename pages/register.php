<?php
/**
 * Template Name: Register
 */
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php view('login.register'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>