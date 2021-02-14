<?php
session_start(); 
include'conetDB.php';
$id=$_SESSION['patientid'];
$t="0";
 ?>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

<link rel="shortcut icon" href="images/favicon.ico" />
<script src="https://kit.fontawesome.com/yourcode.js"></script>

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />

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
 header -->
   
<header id="header" class="header transparent">

<!--=================================
 mega menu -->
 <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">
        <div class="topbar-call text-center text-md-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> 17bmiit025@gmail.com</li>
             <li><i class="fa fa-phone"></i> <a href="tel:+7874126261"> <span>+91 7874126261 </span> </a> </li>
          </ul>
        </div>
      </div>
     
     </div>
  </div>
</div>

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu menuFullWidth">
    <!-- menu list items container -->
    <section class="menu-list-items" style="height: 90px;">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a><img id="l" src="images/logo.png" alt="Logo"> </a>
            <div class="menu-mobile-collapse-trigger"><span></span></div></li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">

         <ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;">
         
         <li class="hoverTrigger active"><a href="dashboad.php">Home <div class="mobileTriggerButton"></div></a>    
         </li>


           <li class="hoverTrigger"><a href="javascript:void(0)">Treatments <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="Booking.php">General Checkup<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="Cataract.php">Cataract surgery <div class="mobileTriggerButton"></div></a>   
                    </li>

                    <li class="hoverTrigger"><a href="retina.php">Retina surgery <div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="glaucoma.php">Glaucoma surgery <div class="mobileTriggerButton"></div></a>
                    </li>

                    
                </ul>
            </li>

           

            <li class="hoverTrigger"><a href="javascript:void(0)">Doctor <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                  <?php  
                  $sSQl="SELECT  `DoctorName`,`DoctorID` FROM `doctor`";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
                         ?>
                    <li class="hoverTrigger"><a href="doctorProfile.php?name=<?php echo $row['DoctorName']; ?>&ID=<?php echo $row['DoctorID'] ?>">Dr. 
                    <?php echo $row['DoctorName']; 
                  ?> <div class="mobileTriggerButton"></div></a>
                    </li>
                    <?php  }
                    } ?>
                </ul>
            </li>

            <li class="hoverTrigger"><a href="javascript:void(0)">EYE Care<i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-side effect-expand-top" style="transition: all 400ms ease 0s;">

                    <li class="hoverTrigger"><a href="appointmentDetail.php">Appointment details<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="orderDetail.php">Order detail <div class="mobileTriggerButton"></div></a>
                    </li>
                    
                    <li class="hoverTrigger"><a href="Prescription.php">Prescription <div class="mobileTriggerButton"></div></a>
                   </li>
  
                 </ul>
            </li>
      
            <li class="hoverTrigger"><a href="javascript:void(0)">EYEWEAR <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                <li class="hoverTrigger"><a href="shopping.php">All Product<div class="mobileTriggerButton"></div></a>
                    </li>
                  <?php  
                  $sSQl="SELECT  * FROM `category`";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
                         ?>
                    <li class="hoverTrigger"><a href="SProduct.php?category=<?php echo $row['CategoryName']; ?>&ID=<?php echo $row
                    ['CategoryID']; ?>"> 
                    <?php echo $row['CategoryName']; ?>
                    <div class="mobileTriggerButton"></div>
                    </a>
                    </li>

                    <?php  }
                    } ?>
                </ul>
            </li>



             <li class="hoverTrigger"><a href="testimonial.php">testimonial<div class="mobileTriggerButton"></div></a>
             </li>

             <li class="hoverTrigger"><a href="javascript:void(0)">Contact <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="contact.php">Contact Us<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="feedback.php">Feedback <div class="mobileTriggerButton"></div></a>
                      
                    </li>
                    
                    <li class="hoverTrigger"><a href="FAQ.php">FAQ <div class="mobileTriggerButton"></div></a>
                    </li>
                   
                </ul>
            </li>

             <li class="hoverTrigger"><a href="javascript:void(0)"><i class="fa fa-cogs"></i><div class="mobileTriggerButton"></div></a>
              <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                    <li class="hoverTrigger"><a href="changepassword.php">Change Password<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="profile.php">Update profile<div class="mobileTriggerButton"></div></a>
                    </li>

                    <li class="hoverTrigger"><a href="logout.php">Log Out <div class="mobileTriggerButton"></div></a></li>
    
                </ul>
             </li>

            <li class="hoverTrigger"><a href="javascript:void(0)"><i class="fa fa-search"></i><div class="mobileTriggerButton"></div></a>
              <ul class="drop-down-multilevel effect-expand-top" style="transition: all 400ms ease 0s;">
                   <!--   <form action="#">
                  <input type="text"  class="form-control" name="search" placeholder="Search.." value="" >
                  <button class="btn search-button" type="submit" value="Search"> <i class="fa fa-search not-click"></i></button>
                </form> -->
                </ul>
             </li>



          <li>
           <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i><strong class="item" style="background-color: #D8F8A6; color: black;"> <?php 
         $sql="SELECT count(*) As total FROM `add_to_cart` WHERE PatientID='".$id."'";
  
      if ($result = $con->query($sql)) {    
     while ($row = $result->fetch_object()) {

       echo $row->total;
        
    }
    $result->close();
  }
    ?></strong></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>

              <?php  


                  $sSQl="SELECT p.ProductName,p.Image,p.Cost,a.ProductID,a.Quantity FROM add_to_cart a,product p WHERE a.ProductID=p.ProductID AND a.PatientID='".$id."'";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
              ?>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="Admin/uploads/<?php echo $row['Image']; ?>" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#"><?php echo $row['ProductName'] ?><strong><?php echo $row['Quantity']; 
                  ?></strong> </a>
                  <div class="cart-price">
                   <ins>Rs. <?php echo $row['Cost']; ?></ins>
                 </div>
                </div>
                <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div> 
                <?php  
                  $cost= $row['Cost'];
                  $Quantity=$row['Quantity'];
                  $sum=$cost * $Quantity;
                  
                  $t+=$sum;
              }
                    } 

                    ?>

              <div class="cart-total">
                <h6 class="mb-15"> Total:<?php echo $t;?></h6>
                <a class="button black" href="Checkout.php">Checkout</a>
              </div>
            </div>
          </div>
           </li>


        </ul>
        
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>                  

<section class="page-section-ptb" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/05.jpg); height: 450px; width: 100%">
  <div class="container">
  </div>
</section>







</div>

<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- Style Customizer -->
<script src="js/style-customizer.min.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- revolution custom -->
<script src="revolution/js/revolution-custom.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>

<script src="js/script.js"></script>
<script src="js/script.min.js"></script>


</body>
</html>
