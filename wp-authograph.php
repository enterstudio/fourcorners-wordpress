<?php 
/*
Plugin Name: Authograph
Plugin URI:  https://fourcorners.io/
Description: WordPress Plugin to create and embed authograph images into wordpress content
Version:     1.1
Author:      Open Lab, Newcastle University
Author URI:  https://openlab.ncl.ac.uk
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/



function authograph_link_script(){
    $ffVersion = "*"; 
    wp_enqueue_script("authograph_render","https://cdn.rawgit.com/digitalinteraction/fourcorners/master/dist/4c.js?ver=".$ffVersion,array(),null,true);
}
add_action('wp_enqueue_scripts','authograph_link_script');



function authograph_enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["authograph_button_plugin"] =  plugin_dir_url(__FILE__) . "authograph_index.js";


    wp_register_script('authograph_index','authograph_index.js',array(),NULL,true);
    wp_enqueue_script('authograph_index');

    $authograph_custom = array( 'plugin_url' => plugins_url().'/wp-authograph/' );
    wp_localize_script( 'authograph_index', 'authograph_php', $authograph_custom );

    
    return $plugin_array;
}

add_filter("mce_external_plugins", "authograph_enqueue_plugin_scripts");


function authograph_register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "Authograph");
    return $buttons;
}
add_filter("mce_buttons", "authograph_register_buttons_editor");


// UPLOAD ENGINE
function load_authograph_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_authograph_media_files' );



function authograph_rewrite_media_metadata($media, $metadata){
    
}

add_action('rest_api_init','authograph_register_metadata_rest');
function authograph_register_metadata_rest(){
    register_rest_route('wp_authograph','/metadata/(?P<id>\d+)',array(
        'methods'=>'GET',
        'callback'=>'authograph_read_media_metadata',
        'args' => array(
			'id' => array(
				'validate_callback' => function($param, $request, $key) {
					return is_numeric( $param );
				}
			),
		),
        ));
}

function authograph_read_media_metadata($request_data){
    $values = wp_get_attachment_metadata($request_data['id']);

    $data = $values['image_meta'];
    $copyright = $data['copyright'];
    $title = $data['title'];
    $created = $data['created_timestamp'];
    $description = $data['caption'];
    $credit = $data['credit'];
    $return_text = '{"context": [],"backStory":{"text": "'.$title.'","date": "'.date_i18n("F j, Y",$created).'"},"creativeCommons" :{ "copyright":"'.$copyright.'"}}';
    return $return_text;
}