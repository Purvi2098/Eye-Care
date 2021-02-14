<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Doctor dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css"/>
</head>

<body class="theme-cyan">


<!-- Overlay For Sidebars -->
<div class="overlay"></div>


<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="javascript:void(0);" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
        <ul class="mfbc_list">
            <li><a href="bappointment.php" data-mfb-label="Appointment" class="mfb-child bg-blue"><i class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
            <li><a href="patient.php" data-mfb-label="Patients List" class="mfb-child bg-orange"><i class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
            
        </ul>
    </li>
</ul>


<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"><a class="navbar-brand"><em>Eye care clinic</em></a> </div>
        <ul class="nav navbar-nav navbar-right">
            
            <!-- #END# Tasks -->
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 


   
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">

            <div class="admin-image" > 
                <img src="../docImage/<?php echo $_SESSION['Image']; ?>" alt=""> 

                <div class="admin-action-info">
                <span>   Dr. <?php echo $_SESSION['doctorname'];  ?><br>
                <?php echo $_SESSION['email'];  ?><br>
                Tel: <?php echo $_SESSION['mobile'];  ?><br></span>

                <ul>
                    
                    <li><a href="dprofile.php" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="../logout.php" title="sign out" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            </div>

        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Nagvigation</li>
                <li class="active open"><a href="index.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                    <ul class="ml-menu">
                        <li><a href="bappointment.php">Booked Appointment</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patient.php">All Patients</a></li>
                    </ul>
                </li>                
                
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    
    
    
</section>


<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/chartscripts.bundle.js"></script> <!-- Chart Plugins Js -->
<script src="assets/bundles/sparklinescripts.bundle.js"></script> <!-- Chart Plugins Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/charts/sparkline.min.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 13:45:03 GMT -->
</html>