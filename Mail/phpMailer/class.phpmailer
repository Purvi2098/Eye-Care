<?php 
$TO=$_POST['user-email'];

	require 'phpMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	$mail->IsSMTP();
	//$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "17bmiit025@gmail.com";
	$mail->Password = "Purvi2098";

	$mail->setFrom('EyeCare@gmail.com', 'Support');
	$mail->addAddress($TO, 'Users');
	//$mail->addReplyTo($TO, 'Users');
	$mail->isHTML(true);

	$mail->Subject = 'Request for recovery of password';
	$mail->Body = '<B><center><div>
      		<h2 style=color:green;>Eye Care Clinic</h2>
			<hr>
      		<br>

      		 <b>
      		 <p>We received a request to reset your password. </p>
      		 <p>Click this link to recover your password
      		 <a href="http://localhost/EyeCare/resetPassword.php" > 
      		 "http://EyeCareClinic/Password_recovery_link"
      		 </a>
      		 <br>
      		 If you did not requested to reset password, ignore this email.
      		 </p>
      		 <br></p>Regards,<br> Admin.</div>

      		 </center>
      		 </B>';
	$mail->AltBody = 'Dear user, Thank you for your Support.';


	if(!$mail->send()) {
		echo "
			<br>
			<br>
			<br>
			<center style=color:blue;><b>	<h3>	
			Something went wrong please try again later.
			</center></b> </h3>";	
		
	} else {
		echo "
			<br>
			<br>
			<br>
			<center><b>	<h3 style=color:red;>	
			Mail has been sent to registerd Mail Address. please check to reset password.
			</center></b> </h3>";
	}


?>
