<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Admin dashboard</title>
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
            <li><a href="al_appointment.php" data-mfb-label="Appointment" class="mfb-child bg-blue"><i class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
            <li><a href="aLL_patient.php" data-mfb-label="Patients List" class="mfb-child bg-orange"><i class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
            <li><a href="payments.php" data-mfb-label="Payments" class="mfb-child bg-purple"><i class="zmdi zmdi-balance-wallet mfbc_icon"></i></a></li>
        </ul>
    </li>
</ul>

<!-- #Top Bar -->

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.php"><b>Eye care clinic</b></a> </div>
        <ul class="nav navbar-nav navbar-right">
             
            
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info" style="height: 100px">
            
            <div class="admin-action-info"> <span>Welcome</span>
                <h3>Admin</h3>
                <ul>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a href="../login.php" title="sign out" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
           
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Admin Home</li>
                <li class="active open"><a href="index.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <ul class="ml-menu">

                    </ul>
                </li>
                 <li><a href="al_appointment.php"><i class="zmdi zmdi-file-text"></i><span>View Appointments</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctors.php">All Doctors</a></li>
                        <li><a href="addDoctor.php">Add Doctor</a></li>                       
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                    <ul class="ml-menu">
                        <li><a href="aLL_patient.php">All Patients</a></li>   
                        <li><a href="manage_patient.php">Manage Patient details</a></li>       
                        <li><a href="addTest.php">Test Report</a></li>
                        <li><a href="addprec.php">Add preception</a></li>
                       <li><a href="view_Prescription.php">View preception</a></li>
                
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="view_payment.php">Payments</a></li>
                        <li> <a href="Billing.php">Add Bill</a></li>
                       
                    </ul>
                </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Products</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="all_product.php">All Products</a></li>
                        <li><a href="manage_product.php">Manage Product</a></li>
                        <li> <a href="addproduct.php">Add Product/category</a></li>
                    </ul>
                </li>
                <li><a href="report.php"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
       
    </aside>
    
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
            
            <div role="tabpanel" class="tab-pane in active in active" id="settings">
                <div class="demo-settings">
                    <p>General settings</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>System settings</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>Account settings</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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

</html>
