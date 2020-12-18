<?php

class BookAwesomeScripts
{
	
	public function __construct(){
		add_action( 'wp_enqueue_scripts', array($this, 'frontendScripts') );
		add_action( 'wp_enqueue_scripts', array($this, 'frontendStyles') );
	}

	public function frontendScripts(){
		global $bookAwesomeTheme;
		wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('jquery.instagramFeed', get_template_directory_uri() . '/assets/js/jquery.instagramFeed.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('jquery.zoom', get_template_directory_uri() . '/assets/js/jquery.zoom.js', array(), $bookAwesomeTheme->version, true);
		wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), $bookAwesomeTheme->version, true);

		wp_localize_script('custom', 'bas_admin', array('admin_url' => admin_url('admin-ajax.php')));
	}

	public function frontendStyles(){
        global $bookAwesomeTheme;
        wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('swiper.min', get_template_directory_uri() . '/assets/css/swiper.min.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('all.min', get_template_directory_uri() . '/assets/css/all.min.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', $bookAwesomeTheme->version, true);
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', $bookAwesomeTheme->version, true);
	}
}
