<?php
  include('header.php');

if(isset($_POST['contactmail'])){

  $id=$_POST['email'];
  $name=$_POST['name'];

require 'Mail/phpMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer;
  
  $mail->IsSMTP();
 // $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "17bmiit025@gmail.com";
  $mail->Password = "Purvi2098";

  $mail->setFrom($id,$name );
  $mail->addAddress('17bmiit025@gmai.com', 'Admin');
  //$mail->addReplyTo($TO, 'Users');
  $mail->isHTML(true);

 // $mail->Subject = '';
  $mail->Body = $_POST['message'];
 


  if(!$mail->send()) {
    echo "
      <br>
      <br>
      <br>
      <center style=color:blue;><b> <h3>  
      Something went wrong please try again later.
      </center></b> </h3>"; 
    
  } else {
    echo "
      <br>
      <br>
      <br>
      <center><b> <h3 style=color:red;> 
      Mail has been sent.
      </center></b> </h3>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Contact Us</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles"/>
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">





<!--=================================
 contact-->

<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center mt-30">
      <div class="col-md-10">
        <div class="section-title text-center">
            <h6>We are exteremly happy to help you.</h6>
            <h2 class="title-effect">Contact Us</h2>
            <p class="mb-50">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content theme-color" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
        </div>
       </div>
      <div class="col-lg-12">
       
          <form id="contactmail"  method="post" action="">
            <div class="contact-form clearfix">
              <div class="section-field">
                <input id="name" type="text" placeholder="Name*" autocomplete="off" class="form-control" name="name">
              </div>
              <div class="section-field">
                  <input type="email" placeholder="Email*" autocomplete="off" class="form-control" name="email">
              </div>
              <div class="section-field">
                  <input type="text" placeholder="Phone*" autocomplete="off" class="form-control" name="phone">
              </div>
              <div class="section-field textarea">
                 <textarea class="input-message form-control" autocomplete="off"  placeholder="Comment*" rows="7" name="message"></textarea>
              </div>
         

              <div >
                   <button id="contactmail" name="contactmail" type="submit" value="Send" class="button"><span> Send Mail </span> <i class="fa fa-paper-plane"></i></button>
              </div>

            </div>
          </form>
           
        </div>
    </div>
    <div class="row mt-60">
      <div class="col-lg-12">
        <div style="width: 100%; height: 500px;" id="map-02" class="g-map" data-type='green'></div>
      </div>
    </div>



  </div>
</section>

<!--=================================
 contact -->


<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- Style Customizer -->
<script src="js/style-customizer.min.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>


<script src='www.google.com/recaptcha/api.js'></script>

</body>


</html>
