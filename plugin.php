<?php
/*
Plugin Name: Custom Site Service
Plugin URI: https://github.com/kur4ge/custom-site-service
Description: You can specify different short-chain domain names by configuring YOURLS_SITE_SERVICE like the old version.
Version: 1.0
Author: Kur4ge
Author URI: https://kur4ge.com
*/

// No direct call
if (!defined('YOURLS_ABSPATH')) die();


function yourls_link_custom_site_service($link, $keyword)
{
    if ($keyword == '') return $link;
    if (defined('YOURLS_SITE_SERVICE')) {
        $site_service = yourls_apply_filter('get_yourls_site', trim(YOURLS_SITE_SERVICE, '/'));
        $link = yourls_normalize_uri($site_service . '/' . $keyword);
        if (yourls_is_ssl()) {
            $link = yourls_set_url_scheme($link, 'https');
        }
    }
    return $link;
}


yourls_add_filter('yourls_link', yourls_link_custom_site_service, 99);
