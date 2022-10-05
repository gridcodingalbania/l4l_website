<?php
if(!function_exists('get_asset'))
{
    function get_asset($file)
    {
        return sprintf('%s/resources/images/%s', get_template_directory_uri(), $file);
    }
}

if(!function_exists('get_featured_image'))
{
    function get_featured_image($post_id = null)
    {
        if(!$post_id){
            global $post;
            $post_id = $post->ID;
        }
        $image = wp_get_attachment_url(get_post_thumbnail_id($post_id));
        if(!$image){
            $image = get_asset('default.png');
        }
        return $image;
    }
}

if(!function_exists('get_image'))
{
    function get_image($file)
    {
        return sprintf('%s/resources/images/%s', get_template_directory_uri(), $file);
    }
}

if(!function_exists('get_user_role'))
{
    function get_user_role($user_id = null)
    {
        if(!$user_id){
            $user_id = get_current_user_id();
        }
        $user = get_user_by('id', $user_id);
        if(!$user || is_wp_error($user)){
            return false;
        }
        return $user->roles[0];
    }
}
