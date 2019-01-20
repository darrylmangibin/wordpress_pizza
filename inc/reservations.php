<?php 

function lapizzeria_save_reservation() {
	global $wpdb;

	if(isset($_POST['reservation']) && $_POST['hidden'] === '1') {
		$name = sanitize_text_field($_POST['name']);
		$date = sanitize_text_field($_POST['date']);
		$email = sanitize_text_field($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);
		$message = sanitize_text_field($_POST['message']);

		$table = $wpdb->prefix . 'reservations';

		$data = array(
			'name' => $name,
			'date' => $date,
			'email' => $email,
			'phone' => $phone,
			'message' => $message
		);

		$format = array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		);

		$wpdb->insert(
			$table,
			$data,
			$format
		);
	}
}
add_action('init', 'lapizzeria_save_reservation');

 ?>