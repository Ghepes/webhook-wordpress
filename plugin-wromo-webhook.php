<?
/**
 * Plugin Name: Wromo Webhook in Wordpress
 * Plugin URI: https://github.com/Ghepes/webhook-wordpress
 * Author: Iulian Ghepes
 * Author URI: https://github.com/Ghepes
 * Description: Wromo Webhook in Wordpress to PUT GET request commands
 * Version: 1.0.0
 * License: GPL2 or Later GPL-3.0 license
 * License URI: https://github.com/Ersin84/webhook-wordpress/blob/main/LICENSE
 * text-domain: webhook-wordpress
 */

 // Security.
 defined( 'ABSPATH' ) or die( 'Unauthorized Access' ); // for security requests

 add_action( 'save_post', 'wromox_save_post_webhook_wordpress', 10, 2 ); // save post

 function wromox_save_post_webhook_wordpress( $post_id, $post ) {

    $message = 'Post #' . $post_id . 'has benn created with title - ' . $post->$post_title;

    $url = 'https://api.wromo.com/v1/post/';

    $args = array(
        'body' => $array(
            'message' => $message
        )
    );

    wp_remote_post( $url, $args );
 }

