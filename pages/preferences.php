<?php

/**
 * Template Name: Preferences
 */
?>
<?php get_header(); ?>

<?php if (is_user_logged_in()) {
    while (have_posts()) : the_post();
        view('preferences.first-step');
    endwhile;
} else {
?><p>To access this 
    <a href="<?php echo site_url('/register'); ?>" class="text-flamingo border-b-2 border-[red]">Login</a> or <a href="<?php echo site_url('/register'); ?>" class="text-flamingo border-b-2 border-[red]">Register</a> </p> <?php
                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                    ?>
<?php get_footer(); ?>