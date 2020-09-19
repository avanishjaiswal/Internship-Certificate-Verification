<?php
//Exit if file called directly
if (! defined( 'ABSPATH' )) {
	exit;
}


// add top-level administrative menu
function Internship_certificate_admin_menu() {
	
	/* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug, 
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/
	
	add_menu_page(
		'Internship CV',
		'Internship CV',
		'manage_options',
		'certificate-codes',
		'Internship_certificate_admin_certificate_ui',
		'dashicons-admin-generic',
		null
	);
	
}
add_action( 'admin_menu', 'Internship_certificate_admin_menu' );