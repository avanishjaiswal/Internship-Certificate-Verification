<?php
//Exit if file called directly
if (! defined( 'ABSPATH' )) { 
    exit; 
}


function Internship_certificate_avanish_certificate_onActivation(){
	global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $create_table_query = "
    CREATE TABLE IF NOT EXISTS `avanish_Internship_certificates` (
        id INTEGER NOT NULL AUTO_INCREMENT,
        certificate_code TEXT NOT NULL,
        student_name TEXT NOT NULL,
        course_name TEXT NOT NULL,
        course_hours TEXT NOT NULL,
        dob TEXT NOT NULL,
        award_date TEXT NOT NULL,
        PRIMARY KEY (id)
    )$charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $create_table_query );
}