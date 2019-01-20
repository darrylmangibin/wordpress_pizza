<?php 

function lapizzeria_save_reservation() {
	global $wpdb;

	if(isset($_POST['reservation']) && $_POST['hidden'] === '1') {
		$name = $_POST['name'];
		$date = $_POST['date'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

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