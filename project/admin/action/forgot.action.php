<?php
include('../../config.php');
$db= new connection;

require ADMIN_PATH.'libs/phpmailer/PHPMailerAutoload.php';


$time = date('Y-m-d H:i:s');

$time_int = strtotime($time);

/*
print "<pre>";
print_r($_POST);
exit;
*/




$query = "select * from user_tbl";
$where = "where email = '".$_POST['email']."'  ";
$order = "";
$limit = "";

$data = null;

$data = $db->fetch_rows($query,$where,$order,$limit);


if(count($data)>0)
{


	$random_number = base64_encode(rand(0,999));

	$vals = null;
	$set = "random_number = '$random_number' ";
	$where = "email = '".$_POST['email']."' ";
	$db->update("user_tbl",$set,$where);


		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'localhost';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = false;                               // Enable SMTP authentication
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('info@noman.pk', 'ADMIN');
		$mail->addAddress($_POST['email']);     // Add a recipient
		$mail->addBCC('info@noman.pk');
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Reset Password Link';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->Body    = '
		Please reset your password by clicking on the link below
		<br>
		<br>
		<a href="'.ADMIN_URL.'reset.php?a='.$random_number.'">Reset Password</a>
		<br>
		<br>
		Regards
		<br>
		SITE ADMIN
		';

		$mail->send();



	$_SESSION['webapp']['error_msg'] = "Password Reset Link has been sent to you. Please Check your Email";
	echo '<script>location.replace("'.ADMIN_URL.'login.php")</script>';
}
else
{
	$_SESSION['webapp']['error_msg'] = "Email not found";
	echo '<script>location.replace("'.ADMIN_URL.'login.php")</script>';
}
?>
