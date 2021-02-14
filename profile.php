<?php  
 include("header.php");
  include("conetDB.php");
   $user=$_SESSION['patientid'];

 if(isset($_POST['change'])){       

    $nam=$_POST['name'];
    $email=$_POST['email'];
    $cnno=$_POST['mobile'];

    $sqlupdate="UPDATE `patient` SET `PatientName`='".$nam."',`Email`='".$email."' , `MobileNo`='".$cnno."' WHERE PatientID='".$user."' ";
  
    $result2 = mysqli_query($con,$sqlupdate);
      $row2 = @mysqli_num_rows($result2);
    
    if($row2!=0){
      echo  "<div class='alert alert-danger'>Try again after some time</div>";
    }else{
      echo  "<div class='alert alert-success'>Changed sucessfull</div>";
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



</head>

<body>


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
            <h2 class="title-effect">Change Profile?</h2>
            <p>Change Your profile change look...</p>
          </div>
      </div>
    </div>


      <form id="change" name="change" method="post" action="">
        <?php
  $sqllogin="SELECT  `PatientName`, `Email`, `MobileNo` FROM `patient` WHERE PatientID='".$user."'";
  
     if ($result = $con->query($sqllogin)) {    
       while ($row = $result->fetch_assoc()) {  
     ?>
     <div class="row justify-content-center">      
       <div class="col-md-8">
        <div class="clearfix">
         
         <div class="section-field mb-20">
          <label class="form-control-label text-dark">Name :</label>
          <input class="form-control" type="text" autocomplete="off" name="name" id="name" value=<?php echo $row["PatientName"]; ?> /></div>
             
          <div class="section-field mb-20">
            <label class="form-control-label text-dark">Email :</label>
                 <input class="form-control"  type="email" autocomplete="off" name="email" value=<?php echo $row["Email"]; ?> /></div>
             
           <div class="section-field mb-20">
            <label class="form-control-label text-dark">Mobile No :</label>
                   <input class="form-control"  type="text" autocomplete="off"  name="mobile" value=<?php echo $row["MobileNo"]; ?> />
            </div>

            <div class="text-center">
                <button class="button" name="change" id="change"  type="submit">
                  <span> Click to change Profile</span>
                  <i class="fa fa-check"></i>
               </button>

            </div>


          </div>
        </div>
      </div>
      <?php           
                              }
                         $result->close();
                            }

             ?>

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
