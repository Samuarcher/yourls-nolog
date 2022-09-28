<?php
/*
Plugin Name: yourls-nolog
Plugin URI: https://github.com/Samuarcher/yourls-nolog
Description: Yourls plugin so as not to log in IP and the user-agent 
Version: 1.0
Author: Samuarcher
*/

yourls_add_filter( 'get_user_agent', 'nolog_user_agent' );
yourls_add_filter( 'get_IP', 'nolog_IP' );

function nolog_user_agent( $ua ) {
    return "";
}


function nolog_IP( $ip ) {
    return "";
}
