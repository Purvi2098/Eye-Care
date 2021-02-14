<?php 

	require 'phpMailer/PHPMailerAutoload.php';
	 $mail = new PHPMailer;
	
	$mail->IsSMTP();
	//$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "17bmiit046@gmail.com";
	$mail->Password = "rabari2000";

	$mail->setFrom('TiffinDaba@gmail.com', 'Support');
	$mail->addAddress('dinkalp31@gmail.com', 'Users');
	//$mail->addReplyTo($TO, 'Users');
	$mail->isHTML(true);

	$mail->Subject = 'Subject';
	$mail->Body = '<h2 style=color:green;>tiffin daba</h2>
      		<br>
      		 ';
	$mail->AltBody = 'Dear user, Thank you for your Support.';

	if(!$mail->send()) {
		echo "<script>alert('<center style=color:blue;><b>	<h3>	
			Something went wrong please try again later.
			</center></b> </h3>')</script>";	
		
	} 
	else
	{
		echo "<script>alert('<center style=color:blue;><b>	<h3>	
			Send sucessfully
			</center></b> </h3>')</script>";
	}
	
?>