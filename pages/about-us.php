<?php
/**
 * Template Name: About us
 */
?>
<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="prose">
        <?php the_content(); ?>
    </div>
    <?php view('about.gallery'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>