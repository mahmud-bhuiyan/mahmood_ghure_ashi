<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib{

	public function __constract(){
		log_message('debug','PHP Mailer Class is loaded');
	}
	public function load(){
		require_once(APPPATH."third_party/PHPMailer/Exception.php");
		require_once(APPPATH."third_party/PHPMailer/PHPMailer.php");
		require_once(APPPATH."third_party/PHPMailer/SMTP.php");

		$mail=new PHPMailer(true);
		$mail->isSMTP();
		$mail->SMTPDebug=1;
		$mail->SMTPAuth=True;
		$mail->SMTPSecure="tls";
		$mail->Port=587;
		$mail->Host='smtp.googlemail.com';
		$mail->Username='devolapertest@gmail.com';
		$mail->Password='2189192025';
		$mail->isHTML(true);
		return $mail;
	}
}




 ?>