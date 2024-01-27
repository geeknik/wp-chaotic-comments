<?php
/**
 * Plugin Name: Chaotic Comments
 * Plugin URI: https://github.com/your-github/chaotic-comments
 * Description: Randomly shuffles and styles comments for a chaotic display.
 * Version: 1.0
 * Author: geeknik, Fred (Model_v01)
 * Author URI: https://totalnerdity.com
 */

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

add_action( 'wp_enqueue_scripts', 'chaotic_comments_enqueue_scripts' );

function chaotic_comments_enqueue_scripts() {
    wp_enqueue_script( 'chaotic-comments-js', plugin_dir_url( __FILE__ ) . 'js/chaotic-comments.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style( 'chaotic-comments-css', plugin_dir_url( __FILE__ ) . 'css/chaotic-comments.css', array(), '1.0.0' );
}

add_filter( 'comments_array', 'chaotic_comments_shuffle', 10, 2 );
function chaotic_comments_shuffle( $comments, $post_id ) {
    shuffle( $comments );
    return $comments;
}
