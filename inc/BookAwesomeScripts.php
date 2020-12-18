<?php

/**
* 
*/
class BookAwesomeScripts
{
	
	public function __construct(){
		add_action( 'wp_enqueue_scripts', array($this, 'frontendScripts') );
		add_action( 'wp_enqueue_scripts', array($this, 'frontendStyles') );
	 	add_action( 'admin_enqueue_scripts', array($this, 'backendStyles') );
        add_action( 'admin_enqueue_scripts', array($this, 'backendScripts') );
	}

	public function frontendScripts(){
		global $bookAwesomeTheme;
		wp_enqueue_script('bas-search-form', get_template_directory_uri() . '/assets/js/search-form.js', array(), $bookAwesomeTheme->version, true);
		wp_localize_script('bas-search-form', 'bas_admin', array('admin_url' => admin_url('admin-ajax.php')));
	}

	public function frontendStyles(){
		global $bookAwesomeTheme;
		wp_enqueue_style( 'style-bookawesome', get_template_directory_uri() . '/assets/css/style.css' );
	}

	public function backendStyles()
    {
        global $BookAwesomePlugin;
        wp_enqueue_style( 'bas-backend-customz-css', get_template_directory_uri() . '/assets/css/customz.css',array() ,$BookAwesomePlugin->version, 'all' );
    }

    public function backendScripts()
    {
        global $BookAwesomePlugin;
        wp_enqueue_script('bas-backend-widget-sim-by-type', get_template_directory_uri() . '/assets/js/widgetSimbyType.js', array(), $BookAwesomePlugin->version, true);
        wp_localize_script('bas-backend-widget-sim-by-type', 'bas_admin', array('admin_url' => admin_url('admin-ajax.php')));
    }
}
