<?php
/**
 * All the following functions declare shortcodes
 *
 * @package _s
 * @since _s 1.0
 */

/**
 * Create some boxes
 * ex: [note_box]content[/note_box]
 *
 * @since _s 1.0
 */
function _s_download_box( $atts, $content = null ) {
   return '<div class="download_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('download_box', '_s_download_box');


function _s_warning_box( $atts, $content = null ) {
   return '<div class="warning_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('warning_box', '_s_warning_box');


function _s_info_box( $atts, $content = null ) {
   return '<div class="info_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('info_box', '_s_info_box');


function _s_note_box( $atts, $content = null ) {
   return '<div class="note_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('note_box', '_s_note_box');

function _s_fancy_box( $atts, $content = null ) {
   return '<div class="fancy_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('fancy_box', '_s_fancy_box');
