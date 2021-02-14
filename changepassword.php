<?php 
 
 include("header.php");
  include("conetDB.php");
 if(isset($_POST['change'])){

  $user=$_SESSION['PatientName'];
  $pass=$_POST["pass"];
  $npass=$_POST["npass"];


  $sqllogin="SELECT Username,Password FROM `patient`
  WHERE `Username`='".$user."' AND `Password`='".$pass."'";
  
    $result = mysqli_query($con,$sqllogin);
    $row = mysqli_num_rows($result);
 
  if($row!=0)
  {
      
    $sqlupdate="UPDATE `patient` SET `Password`='".$npass."' WHERE `Username`='".$user."' ";
  
    $result2 = mysqli_query($con,$sqlupdate);
      $row2 = @mysqli_num_rows($result2);
    
    if($row2!=0){
      echo  "<div class='alert alert-danger'>Try again after some time</div>";
    }else{
      echo  "<div class='alert alert-success'>Changed sucessfull</div>";
    }
 
 

  }
  else
  {
    echo  "<b><font color='#FF0000'><script>alert('Incorrect Old Password')</script>";

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
<title>Change Password</title>

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


<script type="application/javascript">
  function validation(){

    if(document.change.pass.value == "" || document.change.npass.value == "" || document.change.cpass.value == ""){
      alert("All fields are necessary");
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



<section class="white-bg page-section-ptb">
  <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12">
        <div class="section-title text-center">
            <h6 class="">Welcome to Eye Care Clinic</h6>
            <h2 class="title-effect">Change Password?</h2>
            <p>Happy to help you. Please provide your credientials.</p>
          </div>
      </div>
    </div>

      <form id="change" name="change" method="post" action="" onsubmit="return validation()">
     <div class="row justify-content-center">      
       <div class="col-md-8">
        <div class="clearfix">
         
         <div class="section-field mb-20">
          <input class="form-control" type="password" autocomplete="off" name="pass" id="pass" placeholder="Enter old password" ></div>
             
          <div class="section-field mb-20">
                 <input class="form-control" type="password" autocomplete="off" placeholder="Enter new password" name="npass" ></div>
             
           <div class="section-field mb-20">
                   <input class="form-control" type="password" autocomplete="off" placeholder="Confirm password" name="cpass" >
            </div>

            <div class="text-center">
                <button class="button" name="change" id="change"  type="submit">
                  <span> Change your Password</span>
                  <i class="fa fa-check"></i>
               </button>

            </div>


          </div>
        </div>
      </div>

   </form>   
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
