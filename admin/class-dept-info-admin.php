<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link
 * @since      0.1.0
 *
 * @package    Dept_Info
 * @subpackage Dept_Info/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dept_Info
 * @subpackage Dept_Info/admin
 * @author     Austin Tindle <austin.tindle@ucf.edu>
 */
class Dept_Info_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $dept_info    The ID of this plugin.
	 */
	private $dept_info;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $dept_info       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $dept_info, $version ) {

		$this->dept_info = $dept_info;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dept_Info_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dept_Info_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->dept_info, plugin_dir_url( __FILE__ ) . 'css/dept-info-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dept_Info_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dept_Info_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->dept_info, plugin_dir_url( __FILE__ ) . 'js/dept-info-admin.js', array( 'jquery' ), $this->version, false );

	}

}
