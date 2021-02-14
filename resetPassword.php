 
<?php

    include("conetDB.php");
if(isset($_POST["reset-password"]))
{
  $user=$_POST['Username'];
  $opass=$_POST["member_password"];
  $npass=$_POST["confirm_password"];

  $sqllogin="SELECT Username,Password FROM `patient`
  WHERE `Username`='".$user."' AND `Password`='".$opass."'";
  
    $result = mysqli_query($con,$sqllogin);
    $row = mysqli_num_rows($result);
 
  if($row!=0)
  {
      
    $sqlupdate="UPDATE `patient` SET `Password`='".$npass."' WHERE `Username`='".$user."' ";
  
    $result2 = mysqli_query($con,$sqlupdate);
      $row2 = @mysqli_num_rows($result2);
    
    if($row2!=0){

      echo  "<b><font color='#FF0000'><script>alert('Something went wrong try again later.')</script>";
    }
    else
    {
      echo  "<b><font color='#FF0000'><script>alert('Sucessfully changed.');window.location.href='login.php';</script>";

    }
 
    
  }
  else
    {
      echo  "<b><font color='#FF0000'><script>alert('Invalid username/ Password.')</script>";
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
<title>Reset Password</title>



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


</head>

<body>


 <div class="wrapper">



<!--=================================
 login-->

                  
  <section class="gray-bg height-100vh d-flex align-items-center page-section-ptb login">
  <div class="container">
     <div class="row no-gutters justify-content-center">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-30" style="background: url(images/login/01.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
         <div class="login-fancy pos-r">
          <h2 class="text-white mb-20">Hello User!</h2>
          <p class="mb-20 text-white">Welcome to Eye Care Clinic.Please Conform your Password.Thank you</p>             

          
         </div>
       </div>

       
       <div class="col-lg-4 col-md-6 white-bg">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Reset Password</h3>
        <form name="frmReset" id="frmReset" method="post" >
            
            <div class="section-field mb-20">
                <label class="mb-10" for="name">UserName* </label>
                  <input id="Username" class="web form-control" type="text" autocomplete="off"  placeholder="Username" name="Username">
              </div>

             <div class="section-field mb-20">
                <label class="mb-10" for="name">Old Password* </label>
                  <input id="member_password" class="web form-control" autocomplete="off" type="text"   placeholder="User password" name="member_password">
              </div>
             
              <div class="section-field mb-20">
              <label class="mb-10" for="Password">New Password* </label>
               <input id="confirm_password" class="Password form-control" autocomplete="off" type="password"  placeholder="New password" name="confirm_password">
              </div>

              <br>
             
             <input type="submit" name="reset-password" id="reset-password" value="Reset Password" class="button">
             <p class="mt-20 mb-0">Want to go to Login? <a href="login.php"> Click here</a></p>
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
