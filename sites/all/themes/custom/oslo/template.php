<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/17/15
 * Time: 11:34 AM
 */

//function THEME_process_page(&$vars){
//    $alias = explode('/',drupal_get_path_alias(request_uri()));
//    if($alias[1]== "about") {
//        $vars['theme_hook_suggestions'][] = 'page__about';
//    }
//}

function oslo_process_page(&$vars)
{
    if (isset($vars['node']->type))
    {
        // We don't want to apply this on taxonomy or view pages
        // Splice (2) is based on existing default suggestions. Change it if you need to.
        array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__' . $vars['node']->type);
        // Get the url_alias and make each item part of an array
        $url_alias = drupal_get_path_alias($_GET['q']);
        $split_url = explode('/', $url_alias);
        // Add the full path template pages
        // Insert 2nd to last to allow page--node--[nid] to be last
        $cumulative_path = '';
        foreach ($split_url as $path) {
            $cumulative_path .= '__' . $path;
            $path_name = 'page' . $cumulative_path;
            array_splice($vars['theme_hook_suggestions'], -1, 0, str_replace('-', '_', $path_name));
        }
        // This does just the page name on its own & is considered more specific than the longest path
        // (because sometimes those get too long)
        // Also we don't want to do this if there were no paths on the URL
        // Again, add 2nd to last to preserve page--node--[nid] if we do add it in
        if (count($split_url) > 1) {
            $page_name = end($split_url);
            array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__' . str_replace('-', '_', $page_name));
        }
    }
}
