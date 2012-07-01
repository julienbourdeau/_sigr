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

function _s_well_box( $atts, $content = null ) {
   return '<div class="well">' . do_shortcode($content) . '</div>';
}
add_shortcode('well_box', '_s_well_box');


//Add a button in tinymce (visual editor)



/**
 * Create a shortcode for bootstrap buttons
 * ex: [button size="large" type="success" icon="envelope" white=1]Click Here[/button]
 *
 * @since _s 1.0
 */
function _s_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
		'size'		=> '',
		'icon'		=> '',
		'white'		=> '',
		'type'		=> '',
    ), $atts));

    if ( $type != '' ) $type = "btn-$type";
    if ( $size != '' ) $size = "btn-$size";

	$out = "<a class=\"btn $type $size\" href=\"" .$link. "\">";

	if ( $icon != '' ) {
		if ( $white != '' ) $white = "icon-white";
		$out .= "<i class=\"icon icon-$icon $white \"></i> ";
	}

	$out .= do_shortcode($content);
	$out .= "</a>";
    
    return $out;
}
add_shortcode('button', '_s_button');


	/**
	 * Add the previous button shortcode into tinyMCE
	 *
	 * @since _s 1.0
	 */

	function _s_add_btn_button() {  
	   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	   {  
	     add_filter('mce_external_plugins', '_s_add_btn_plugin');  
	     add_filter('mce_buttons', '_s_register_btn_button');  
	   }  
	} 
	function _s_register_btn_button($buttons) {  
	   array_push($buttons, "button");  
	   return $buttons;  
	}
	function _s_add_btn_plugin($plugin_array) {  
	   $plugin_array['button'] = get_bloginfo('template_url').'/js/shortcodes/shortcode-btn.js';  
	   return $plugin_array;  
	} 

	add_action('init', '_s_add_btn_button'); 


/**
 * Create a shortcode for bootstrap icons
 * ex: [icon icon="envelope" white=1]
 *
 * @since _s 1.0
 */
function _s_icon( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'icon'		=> '',
		'white'		=> '',
    ), $atts));

	if ( $white != '' ) $white = "icon-white";
	$out = "<i class=\"icon icon-$icon $white \"></i> ";
    
    return $out;
}
add_shortcode('icon', '_s_icon');


/**
 * Create a shortcode for bootstrap labels
 * ex: [label type="warning"]Attention[/label]
 *
 * @since _s 1.0
 */
function _s_label( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'type'		=> ''
    ), $atts));

	if ( $type != '' ) $type = "label-$type";
	$out  = "<span class=\"label $type\">";
	$out .= do_shortcode($content);
	$out .= "</span>";
    
    return $out;
}
add_shortcode('label', '_s_label');


	/**
	 * Add the previous button shortcode into tinyMCE
	 *
	 * @since _s 1.0
	 */

	function _s_add_label_button() {  
	   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	   {  
	     add_filter('mce_external_plugins', '_s_add_label_plugin');  
	     add_filter('mce_buttons', '_s_register_label_button');  
	   }  
	} 
	function _s_register_label_button($labels) {  
	   array_push($labels, "label");  
	   return $labels;  
	}
	function _s_add_label_plugin($plugin_array) {  
	   $plugin_array['label'] = get_bloginfo('template_url').'/js/shortcodes/shortcode-label.js';  
	   return $plugin_array;  
	} 

	add_action('init', '_s_add_label_button'); 


/**
 * Create a shortcode for bootstrap badges
 * ex: [badge type="success"]12[/badge]
 *
 * @since _s 1.0
 */
function _s_badge( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'type'		=> ''
    ), $atts));

	if ( $type != '' ) $type = "badge-$type";
	$out  = "<span class=\"badge $type\">";
	$out .= do_shortcode($content);
	$out .= "</span>";
    
    return $out;
}
add_shortcode('badge', '_s_badge');


/**
 * Create a shortcode for bootstrap progress bars
 * ex: [progress val="40" type="success" striped="1" active="1"]
 *
 * @since _s 1.0
 */
function _s_progress( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'val'	=> '33',
		'type'		=> '',
		'striped'	=> '',
		'active'	=> '',
    ), $atts));

	if ( $type != '' ) $type = "progress-$type";
	if ( $striped != '' ) $striped = "progress-striped";
	if ( $active != '' ) $active = "active";

	$out  = "<div class=\"progress $striped $active $type\"><div class=\"bar\" style=\"width: $val%;\"></div></div>";

    return $out;
}
add_shortcode('progress', '_s_progress');




