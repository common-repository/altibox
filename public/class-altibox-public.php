<?php 

class Altibox_Public {

	private $plugin_name;
	private $version;

	// constructor
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name     = $plugin_name;
		$this->version         = $version;

	}

	/**
	 * Enqueue scripts
	 */
	function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/js/altibox-public.js', array( 'jquery' ), $this->version, true );

	}

	/**
	 * Enqueue styles
	 */
	function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/altibox-public.css', array(), $this->version, 'all' );


	}

}