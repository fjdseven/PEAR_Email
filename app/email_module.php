<?php

// IF PEAR NOT INSTALLED, THIS WILL *NOT* work
set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());

$pear_user_config = $UserDir . "/.pearrc";

include 'Mail.php';
include 'Mail/mime.php' ;

class Email_Module {
	
	public $email_text;
	public $email_html;
	public $to_address;

	public $hdrs;	
	public $crlf = "\n";
	public $mime; 
	public $body;

	public $mail;

	function __construct( $text, $html='', $from, $subject, $to ) {
		$this->email_text = $text;
		$this->email_html = $html;
		$this->to_address = $to;
		$this->hdrs = array(
			'From' => $from, 
			'Subject' => $subject
		);
	}

	public function sendMail() {
		$this->mime = new Mail_mime(array('eol' => $this->crlf));

		$this->mime->setTXTBody( $this->email_text );
		$this->mime->setHTMLBody( $this->email_html );

		$this->body = $this->mime->get();
		$this->hdrs = $this->mime->headers( $this->hdrs );

		$this->mail =& Mail::factory('mail');
		$this->mail->send( $this->to_address, $this->hdrs, $this->body );
	}

	public static function isSetAndNotNull( $val ) {
		if ( !isset( $val ) ) return false;
		if ( $val == "" ) return false;
		if ( $val == " " ) return false;

		return true;
	}
}