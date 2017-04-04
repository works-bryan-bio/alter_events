<?php

/**
 * Ajax handler to edit a rating.
 *
 * @since 2.12.0
 */
function wpmtst_ajax_edit_rating() {
	$message  = '';
	$post_id  = isset( $_POST['post_id'] ) ? (int) $_POST['post_id'] : 0;
	$rating   = isset( $_POST['rating'] ) ? (int) $_POST['rating'] : 0;
	$name     = isset( $_POST['field_name'] ) ? $_POST['field_name'] : 'rating';

	check_ajax_referer( 'editrating', 'editratingnonce' );

	if ( $post_id ) {
		if ( $rating ) {
			update_post_meta( $post_id, $name, $rating );
		} else {
			delete_post_meta( $post_id, $name );
		}
		$message = 'New rating saved';
	}

	$display = wpmtst_star_rating_display( $rating, 'in-metabox', false );
	$response = array( 'display' => $display, 'message' => $message );
	echo json_encode($response);
	exit;
}
add_action( 'wp_ajax_wpmtst_edit_rating', 'wpmtst_ajax_edit_rating' );


/**
 * [Add Recipient] Ajax receiver
 */
function wpmtst_add_recipient_function() {
	$key = $_REQUEST['key'];
	$form_options = get_option( 'wpmtst_form_options' );
	$recipient = $form_options['default_recipient'];
	include WPMTST_ADMIN . 'partials/settings/recipient.php';
	die();
}
add_action( 'wp_ajax_wpmtst_add_recipient', 'wpmtst_add_recipient_function' );


function wpmtst_get_background_preset_colors() {
	$preset = wpmtst_get_background_presets( $_REQUEST['key'] );
	echo json_encode( $preset );
	die();
}
add_action( 'wp_ajax_wpmtst_get_background_preset_colors', 'wpmtst_get_background_preset_colors' );


/**
 * Dismiss admin notices
 *
 * @since 1.18.4
 */
function wpmtst_dismiss_notice() {
	if ( isset( $_REQUEST['action'] ) && 'wpmtst_dismiss_notice' == $_REQUEST['action'] ) {
		delete_option( 'wpmtst_admin_notices' );
		die;
	}
}
add_action( 'wp_ajax_wpmtst_dismiss_notice', 'wpmtst_dismiss_notice' );


function wpmtst_countdown() {
	$datetime1 = new DateTime();
	$datetime2 = new DateTime('2016-02-02');
	$interval = $datetime1->diff($datetime2);
	if ( $interval->invert )
		echo 'in the next update';
	else
		echo $interval->format('in %a days');
	die();
}
//add_action( 'wp_ajax_wpmtst_countdown', 'wpmtst_countdown' );
