<?php 
session_start();
if (!isset($_SESSION['patientid'])) {
    echo "<script>window.location='pageNotFound.php';</script>";
}

include('conetDB.php');
$id=$_SESSION['patientid'];
$t="0";

?>


<html lang="en">
<head>
<script type="text/javascript" language="javascript">
  window.history.forward();
</script>

  <script>
      var track = {
        display : null, // Holder for the <p> element, for visual feedback
        rider :  <?php echo $id; ?> , 
        delay : 20000, // Delay in between each position update, in milliseconds
        timer : null, // Holder for the interval object
        update : function () {
        // track.update() : update server of current location

          navigator.geolocation.getCurrentPosition(function (pos) {
            // AJAX DATA
            var data = new FormData();
            data.append('req', 'update');
            data.append('rider_id', track.rider);
            data.append('lat', pos.coords.latitude);
            data.append('lng', pos.coords.longitude);

            // AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', "Tracking/2c-ajax-track.php", true);
            xhr.onload = function () {
              var res = JSON.parse(this.response);
              // OK
              if (res.status==1) {
                track.display.innerHTML = "Lat: " + pos.coords.latitude + " Lng: " + pos.coords.longitude;
              }
              // ERROR
              else {
                track.display.innerHTML = res.message;
              }
            };
            xhr.send(data);
          });
        }
      };

      // INIT ON PAGE LOAD
      window.addEventListener("load", function(){
        track.display = document.getElementById("display");
        if (navigator.geolocation) {
          // Set on an interval so that you don't drain the smartphone battery
          // Nor kill the server for the matter
          track.update();
          setInterval(track.update, track.delay);
        } else {
          track.display.innerHTML = "Geolocation is not supported by your browser!";
        }
      });
    </script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>dashboard</title>

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
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-18.gif" alt="">
</div>

<!--=================================
 preloader -->

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


<!--============================
 rev-slider -->

<section class="rev-slider">
  <div id="rev_slider_270_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-4" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
  <div id="rev_slider_270_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
<ul>  <!-- SLIDE  -->
    <li data-index="rs-760" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="revolution/assets/slider-04/180x110_Dr.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="revolution/assets/slider-04/Dr.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption   tp-resizeme"
       id="slide-760-layer-2"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="-70"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":660,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(0,0,0,1); letter-spacing: 20px;font-family:Montserrat ; font-style: bold ;text-transform:uppercase;">Eye Care Clinic </div>

               <!-- LAYER NR. 2 -->
    <div class="tp-caption   tp-resizeme  rev-color"
       id="slide-760-layer-7"
       data-x="center" data-hoffset="-1"
       data-y="center" data-voffset="-10"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":1610,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 600; color: #84ba3f; font-family:Montserrat ;">Welcome's You </div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption   tp-resizeme"
       id="slide-760-layer-3"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="70"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":2380,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(0,0,0,1); font-family: Montserrat ;"> Eyes are the windows to our soul...</div>

    <!-- LAYER NR. 4 -->
    <a class="tp-caption rev-btn  tp-resizeme  rev-btn"
 href="Booking.php" target="_self"       id="slide-760-layer-12"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="150"
            data-width="['auto']"
      data-height="['auto']"

            data-type="button"
      data-actions=''
      data-responsive_offset="on"

            data-frames='[{"delay":3240,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[12,12,12,12]"
            data-paddingright="[30,30,30,30]"
            data-paddingbottom="[12,12,12,12]"
            data-paddingleft="[30,30,30,30]"

            style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Appoint Now </a>
  </li>
  <!-- SLIDE  -->
    <li data-index="rs-761" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="revolution/assets/slider-04/180x110_32c00-01.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="revolution/assets/slider-04/32c00-01.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 5 -->
    <div class="tp-caption   tp-resizeme"
       id="slide-761-layer-2"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="-70"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":300,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: 20px;font-family:Montserrat ;text-transform:uppercase;">Eye Care Clinic </div>

    <!-- LAYER NR. 6 -->
    <div class="tp-caption   tp-resizeme"
       id="slide-761-layer-7"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="-10"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":1270,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;">Welcome's you </div>

    <!-- LAYER NR. 7 -->
    <div class="tp-caption   tp-resizeme"
       id="slide-761-layer-3"
       data-x="center" data-hoffset="190"
       data-y="center" data-voffset="60"
            data-width="['auto']"
      data-height="['auto']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":1990,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family: Montserrat ;">
life to the fullest...</div>

    <!-- LAYER NR. 8 -->
    <div class="tp-caption   tp-resizeme  theme-color"
       id="slide-761-layer-15"
       data-x="center" data-hoffset="-270"
       data-y="center" data-voffset="60"
            data-width="['390']"
      data-height="['71']"

            data-type="text"
      data-responsive_offset="on"

            data-frames='[{"delay":1990,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; min-width: 390px; max-width: 390px; max-width: 71px; max-width: 71px; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family: Montserrat ;font-style:italic;">See</div>

    <!-- LAYER NR. 9 -->
    <a class="tp-caption rev-btn  tp-resizeme  rev-btn"
 href="Booking.php" target="_self"       id="slide-761-layer-12"
       data-x="center" data-hoffset=""
       data-y="center" data-voffset="150"
            data-width="['auto']"
      data-height="['auto']"

            data-type="button"
      data-actions=''
      data-responsive_offset="on"

            data-frames='[{"delay":2760,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[12,12,12,12]"
            data-paddingright="[30,30,30,30]"
            data-paddingbottom="[12,12,12,12]"
            data-paddingleft="[30,30,30,30]"

            style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Appoint Now </a>
  </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>
</section>

<!--=================================
 rev-slider -->

<!--=================================
action box- -->

<section class="page-section-ptb theme-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="text-white fw-2">Get the best vision of your life.</h3>
      </div>
    </div>
  </div>
</section>

<!--=================================
action box- -->

<!--=================================
 About-->

<section class="page-section-ptb">
  <div class="container">
     <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
            <h6>Who we are and what we do</h6>
            <h2 class="title-effect">Get to know us better.</h2>
            <p>We truly care about our users and our product. We are dedicated to providing you with the best experience possible. </p>
            <br><br>
            <b>
            <p class="theme-color">Eye Care Clinic is an online platform on which patient can book their appointment, doctors can track patient progress after/before treatment and admin can handle overall detailing.  </p>
          </b>
          </div>
         
      </div>
      <div class="col-lg-6 sm-mt-30">
        <div class="owl-carousel" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
          <div class="item">
             <img class="img-fluid full-width" src="images/about/01.jpg" alt="">
           </div>
          <div class="item">
            <img class="img-fluid full-width" src="images/about/02.jpg" alt="">
          </div>
          <div class="item">
            <img class="img-fluid full-width" src="images/about/03.jpg" alt="">
          </div>
         </div>
      </div>
     </div>
       <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="feature-text left-icon mt-60 xs-mt-30">
              <div class="feature-icon">
                <span class="ti-server theme-color" aria-hidden="true"></span>
              </div>
               <div class="feature-info">
                <h5>Our Mission</h5>
                <p>"Your Good Vision as our Mission” to restore patients’ sight and transform their life for betterment.  </p>
           </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="feature-text left-icon mt-60 xs-mt-30">
              <div class="feature-icon">
                <span class="ti-heart theme-color" aria-hidden="true"></span>
              </div>
               <div class="feature-info">
                <h5 class="text-back">We Love</h5>
                <p>TO help you</p>
           </div>
          </div>
        </div>
     </div>
  </div>
</section>

<!--=================================
 About-->

<!--=================================
most Awesome- -->

<section class="page-section-ptb parallax" style="background: url(images/bg/05.jpg);">
  <div class="container">
    <form style="width: 550px;">
    <div class="row">
        <div class="col-sm-12">
         <h4 class="mb-40 text-white">Appoint Now</h4>
         <div class="contact-form transparent-form clearfix">
            <div class="section-field">
              <input type="text" placeholder="Name*" class="form-control"  name="name">
             </div>
             <div class="section-field">
                <input type="email" placeholder="Email*" class="form-control" name="email">
              </div>
             <div class="section-field">
                 <input type="text" placeholder="Phone*" class="form-control" name="phone">
              </div>
             <div class="section-field textarea clearfix">
               <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="message"></textarea>
              </div>
               <div class="section-field textarea clearfix">
               <input type="hidden" name="action" value="sendEmail"/>
                 <button class="button white border"><span> Appoint Now </span> <i class="fa fa-paper-plane"></i></button>
               </div>
              </div>
          </div>
        </div>
     </div>
   </form>
</section>
<!--=================================
most Awesome- -->


 

<!--=================================
counter -->

<section class="page-section-ptb theme-bg position-relative">
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="counter left-icon text-white">
        <span class="icon ti-user theme-color" aria-hidden="true"></span>
        <span class="timer" data-to="4905" data-speed="10000"><?php 
         $sql="SELECT count(*) As total FROM `patient`";
  
      if ($result = $con->query($sql)) {    
     while ($row = $result->fetch_object()) {

       echo $row->total;
        
    }
    $result->close();
  }
    ?></span>
        <label>TOTAL USERS</label>
      </div>
    </div>

       <div class="col-lg-3 col-sm-6 sm-mb-30">
        <div class="counter left-icon text-white">
         <span class="icon ti-help-alt theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="3750" data-speed="10000">800</span>
          <label>QUESTIONS ANSWERED</label>
        </div>
      </div>
       <div class="col-lg-3 col-sm-6 xs-mb-30">
        <div class="counter left-icon text-white">
          <span class="icon ti-check-box theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="4782" data-speed="10000">909</span>
          <label>SUCESSFULL TREATMENTS</label>
        </div>
      </div>
       
        </div>
      </div>
    </div>
 </div>
</section>

<!--=================================
counter -->


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


<?php 
	include("footer.php");
 ?>
</body>
</html>