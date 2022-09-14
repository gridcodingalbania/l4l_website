<?php
if(!function_exists('get_asset'))
{
    function get_asset($file)
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
