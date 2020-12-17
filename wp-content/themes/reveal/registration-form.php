<?php
// Template Name: If logged user page

if (!is_user_logged_in()) {
    auth_redirect();
} else {
    $url = "/knowledge-base/webinars/";
    wp_redirect( $url );
    exit;
}