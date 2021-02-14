<?php
session_start();
include("conetDB.php");

if(isset($_POST["login"]))
{
  $user = $_POST['username'];
  $pass = $_POST['password'];

if($user == "admin" && $pass=="admin123"){
header("Location: Admin/index.php");

}
else
  {
    $sqllogin="SELECT * FROM `patient`
  WHERE `username`='$user' AND `password`='$pass'";

  $dlogin="SELECT * FROM `doctor`
  WHERE `username`='$user' AND `password`='$pass'";
  
 if ($result = $con->query($sqllogin)) {    
     while ($row = $result->fetch_object()) {

        $_SESSION['patientid']=$row->PatientID;
        $_SESSION['PatientName']=$row->PatientName;
        $_SESSION['email'] = $row->Email;
         header("Location: dashboad.php");
    }
    $result->close();
}
if ($result2 = $con->query($dlogin)) {    
     while ($row2 = $result2->fetch_object()) {

        $_SESSION['doctorid']=$row2->DoctorID;
        $_SESSION['doctorname']=$row2->DoctorName;
        $_SESSION['Image']=$row2->Image;
        $_SESSION['mobile']=$row2->MobileNo;
        $_SESSION['email'] = $row2->Email;
         header("Location: doctor/index.php");
    }
    $result2->close();
}
else
  {
    echo  "<b><font color='#FF0000'><script>alert('Invalid Login ID and Password')</script>";

  }
}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

  <script language="javascript" type="text/javascript">
    window.history.forward();
  </script>

 

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Login page</title>

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
<script>(
  function(w,d,s,l,i){w[l]=w[l]||[];
    w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'}
      );
var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
j.async=true;j.src='../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>

<script src="www.google.com/recaptcha/api.js"></script>

<!-- End Google Tag Manager -->


<script type="application/javascript">
  function validate(){

    if ( document.login.username.value == "" || document.login.password.value == ""){

      alert("All field are mandatory.");
      return false;

    }

    var user=document.login.username.value;

    var chkuser=/^[a-zA-Z]+$/;

    if(!chkuser.test(user)){
      alert("Username can hold only characters.");
      return false;
    }
    if (user.length <= 3){
      alert("Username must contain atleast three characters.");
      return false;
    }



  }

</script>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

 <div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-18.gif" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 login-->

                  
  <section class="gray-bg height-100vh d-flex align-items-center page-section-ptb login">
  <div class="container">
     <div class="row no-gutters justify-content-center">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-30" style="background: url(images/login/01.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
         <div class="login-fancy pos-r">
          <h2 class="text-white mb-20">Hello User!</h2>
          <p class="mb-20 text-white">Welcome to Eye Care Clinic. Please provide your username and password along with login type.Thank you    </p>             

          <ul class="list-unstyled  pos-bot pb-30">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
         </div>
       </div>

       
       <div class="col-lg-4 col-md-6 white-bg">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">login</h3>
     <form id="login" name="login" method="post" action="" onsubmit="return validate()" >
             <div class="section-field mb-20">
                <label class="mb-10" for="name">User name* </label>
                  <input id="username" class="web form-control" type="text" autocomplete="off"  placeholder="User name" name="username">
              </div>
              <div class="section-field mb-20">
              <label class="mb-10" for="Password">Password* </label>
               <input id="password" class="Password form-control" type="password"  placeholder="Password" name="password">
              </div>

              

            <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two" />
                 <label for="two"> Remember me</label>
                 <a href="forgotPassword.php" class="float-right">Forgot Password?</a>
                </div>
              </div>             


              <input type="submit" name="login" id="login" value="Login" class="button" />
             <p class="mt-20 mb-0">Don't have an account? <a href="registration.php"> Create one here</a></p>
           </form>
          </div>
        </div>
        
      </div>
  </div>
</section>
            
</div>

 
<!--=================================
 jquery -->

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


</body>
</html>
