<?php
include("conetDB.php");


if(isset($_POST['register'])){

   #$UniqueID=uniqid();  
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
 
     
  $sqlp="SELECT Username FROM patient WHERE Username='$username' ";
    $sqld="SELECT Username FROM doctor WHERE Username='$username' ";

  $res_p = mysqli_query($con,$sqlp);
    $res_d = mysqli_query($con,$sqld);

  if(mysqli_num_rows($res_p) > 0 ) {   
      echo "<b><font color='#FF0000'><script>alert('Username is already used . Try again with unique...')</script>";
    }
  else if ( mysqli_num_rows($res_d) > 0){
     echo "<b><font color='#FF0000'><script>alert('Username is already used . Try again with unique...')</script>";
  }
  else{
   
       $query = "insert into patient(PatientName,Username,Password,Email,MobileNo) values('".$fname."','".$username."','".$password."','".$email."','".$phone."')";
         $result = mysqli_query($con,$query);
        $row = @mysqli_num_rows($result);
        
        if($row!=0)
        {      
            echo "<b><font color='#FF0000'><script>alert('Something went wrong. Try again later.')</script>";
        }else{

          header("Location: login.php");
        }

  }

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

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

<div class="bg-overlay-black-60 parallax" style="background-image: url(myimg/regimg.png);">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-18.gif" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 login-->

<section class="section-transparent page-section-pb">
  <div class="container">
     <div class="row justify-content-center">
       <div class="col-md-8">
         <div class="logo text-center mb-30 mt-30">
           <a><img class="img-fluid" id="logo" src="myimg/logo.png" alt="Logo" style="height: 70px;width: 120px"> </a>
         </div>


 <form method="post" action="" enctype='multipart/form-data'>
        <div class="register-bg clearfix">
               <div class="register-title">
             <h2 class="text-white mb-0">Register to Online Eye Clinic</h2>
            </div>

        <div id="register-form" class="register-form">
           
           <div class="row">
             <div class="section-field col-md-6">
            
             <label>First Name*</label>
              <div class="field-widget">
                <input type="text" class="form-control" pattern="[A-Za-z]{3,50}" title="Name can only be characters " autocomplete="off" placeholder="Your Name" name="fname">
              </div>


            </div>
            
            <div class="section-field col-md-6">
             <label>Last Name*</label>
             <div class="field-widget">
              <input type="text" class="form-control" pattern="[A-Za-z]{3,50}" title="Last name  can contain only characters" autocomplete="off" placeholder="Your Last name" name="lname">
              </div>
             </div>
            </div>

           <div class="section-field">
             <label>User name* </label>
              <div class="field-widget">
               <input class="web form-control" type="text" autocomplete="off" placeholder="Choose your user name" name="username">
              </div>
            </div>
            <div class="section-field">
             <label>Password* </label>
              <div class="field-widget">
               <input class="Password form-control" autocomplete="off" type="password" placeholder="Password" name="password">
              </div>
            </div>

            <div class="section-field">
             <label>Email *</label>
              <div class="field-widget">
               <input  class="email form-control" type="email" autocomplete="off" placeholder="Enter your email" name="email">
              </div>
            </div>

            <div class="section-field">
             <label>Mobile phone *</label>
              <div class="field-widget">
               <input id="phone" class="phone form-control" pattern="[987][0-9]{9}" title="1234506789" type="text" autocomplete="off" placeholder="Enter your mobile no" name="phone">
              </div>             

             
            </div>

              <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div>
               <div class="section-field submit-button">
                <input type="hidden" name="action" value="sendEmail"/>
  			
             <!--  <div class="section-field">
               <div class="remember-checkbox">
                     <input name="two" class="form-control" id="two" type="checkbox">
                      <label for="two">Accept our <a href="#"> privacy policy</a> and <a href="#"> customer agreement</a></label>
                 </div>
                </div> -->


                <button class="button mt-20" type="submit" name="register">
                  <span>Register an account</span>
                  <i class="fa fa-check"></i>
               </button>
            <p class="mt-20 mb-0">Want to go Back? <a href="login.php"> Click here</a></p>
             </div>
           </div>
 
  </div>
  </form>
</section>
 </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>
<script src='www.google.com/recaptcha/api.js'></script>

<!-- Style Customizer -->
<script src="js/style-customizer.min.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>


</body>
</html>