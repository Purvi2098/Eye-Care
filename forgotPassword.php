<?php
 include("conetDB.php");

if(isset($_POST["forgot-password"]))
{
  $user = $_POST['user-login-name'];
  $email = $_POST['user-email'];

  $sqllogin="SELECT * FROM `patient`
  WHERE `Username`='$user' AND `Email`='$email'";
  
 if ($result = $con->query($sqllogin)) {    
     while ($row = $result->fetch_object()) {

       require_once('Mail/index.php');
     
    }
    $result->close();
  }
  else
  {
    echo  "<b><font color='#FF0000'><script>alert('Invalid Data Provided')</script>";

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


<script >
function validate_forgot() {
  if((document.getElementById("user-login-name").value == "") || (document.getElementById("user-email").value == "")) {
   alert ('Provide appropriate Data');
    return false;
  }
  return true;
}
</script>
</head>

<body>


 <div class="wrapper">


                  
  <section class="gray-bg height-100vh d-flex align-items-center page-section-ptb login">
  <div class="container">
     <div class="row no-gutters justify-content-center">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-30" style="background: url(images/login/01.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
         <div class="login-fancy pos-r">
          <h2 class="text-white mb-20">Hello User!</h2>
          <p class="mb-20 text-white">Welcome to Eye Care Clinic. Please provide your Email address to reset Password.Thank you    </p>             

         
         </div>
       </div>

       
       <div class="col-lg-4 col-md-6 white-bg">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Forgot Password</h3>
    <form name="frmForgot" id="frmForgot" method="post">
      
             <div class="section-field mb-20">
                <label class="mb-10" for="name">User name* </label>
                  <input id="user-login-name" class="web form-control" autocomplete="off"  type="text"   placeholder="User name" name="user-login-name" >
              </div>
              <div class="section-field mb-20">
              <label class="mb-10" for="email">Email* </label>
               <input id="user-email" class="Password form-control" autocomplete="off"  type="text"  placeholder="Email" name="user-email"  >
              </div>

              
              <br><br><br>
           
            <input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="button">
            <p class="mt-20 mb-0">Want to go Back? <a href="login.php"> Click here</a></p>
           </form>
          </div>
        </div>
        
      </div>
  </div>
</section>
            
</div>

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
