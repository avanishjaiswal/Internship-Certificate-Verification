<?php // Plugin Functions
function Internship_certificate_add_Internship_certificate($code, $name, $course, $hours, $dob, $award_date, $editid){
	global $wpdb;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->update('avanish_Internship_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'course_name'  => $course,
            'course_hours' => $hours,
            'dob' => $dob,
            'award_date' => $award_date,
            ),
            array( 'id' => $editid )
        );
    } else {
        $result = $wpdb->insert('avanish_Internship_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'course_name'  => $course,
            'course_hours' => $hours,
            'dob' => $dob,
            'award_date' => $award_date,
            )
        );
    }
    return $result;
}

function Internship_certificate_delete_Internship_certificate($editid) {
    global $wpdb;
    $result = false;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->delete('avanish_Internship_certificates', array( 'id' => $editid ));
    }
    return $result;
}