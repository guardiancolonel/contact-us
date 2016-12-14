<?php

require 'config.php';

class Contact {

	/**
	 * contact name
	 * @var string
	 */
	
	private $name;

	/**
	 * Contact Email
	 * @var string
	 */
	private $email;

	/**
	 * Contact Subject
	 * @var string
	 */
	
	private $subject;


	private $to_name = TO_NAME;
	private $to_email = TO_EMAIL;

	/**
	 * Form validation errors
	 * @var array
	 */
	private $form_errors = array();

	public $result = array();

	public function __construct($name, $email, $subject) {

		$this->name = $name;
		$this->email = $email;
		$this->subject = $subject;

		$this->validate();

		if ( ! empty( $this->form_errors ) ) {
			$this->result['input_error'] = $this->form_errors;

			$this->send_result();
			return;
		}

		$this->send_contact();

		if ( ! empty( $this->form_errors ) ) {
			$this->result['send_error'] = $this->form_errors;

			$this->send_result();
			return;
		}

		$this->result['success'] = 'Send Message Successfully';
		$this->send_result();
		
	}

	/**
	 * Validate contact form inputs
	 * @return
	 */
	private function validate() {

		if ( empty( $this->name ) || ! $this->name ) {
			$this->form_errors['EMPTY_NAME'] = 'Name Cannot be empty';
		}

		if ( ! preg_match( "/^[a-zA-Z ]*$/" , $this->name ) ) {
  			$this->form_errors['NAME_ERR']  = "Only letters and white space allowed";
		}

		if ( empty( $this->email ) || ! $this->email ) {
			$this->form_errors['EMPTY_EMAIL'] = 'EMAIL Cannot be empty';
		}

		if ( ! filter_var($this->email, FILTER_VALIDATE_EMAIL) ) {
  			$this->form_errors['EMAIL_ERR']  = "Invalid email format";
		}

		if ( empty( $this->subject ) || ! $this->subject ) {
			$this->form_errors['EMPTY_SUBJECT'] = 'Subject Cannot be empty';
		}
	}

	private function send_contact() {

		if ( ! mail($this->to_email, $this->subject, $this->email) ) {
			$this->form_errors['SEND_FAIL'] = 'Failed to send the email';
			exit;
		}
	}

	public function send_result() {
		
	}
}