<?php

require 'includes/Contact.php';

if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest' ) {

	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $subject = $_POST['subject'];
	// $cont = new Contact( $name, $email, $subject );

	var_dump($_POST);
	// echo json_encode($cont->result);
}