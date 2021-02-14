<?php 

$con=mysqli_connect("localhost","root","","eyecareclinic");
     ?>

<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 13:44:38 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Admin</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css"/>
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

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

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Eye Care</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">Total Patient</div>
                        <div class="number"><?php 
             $sql="SELECT count(*) As total FROM `patient`";
  
             if ($result = $con->query($sql)) {    
        while ($row = $result->fetch_object()) {

       echo $row->total;
        
    }
    $result->close();
  }
    ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">Total Doctor</div>
                        <div class="number"><?php 
             $sql2="SELECT count(*) As total FROM `doctor`";
  
             if ($result2 = $con->query($sql2)) {    
        while ($row2 = $result2->fetch_object()) {

       echo $row2->total;
        
    }
    $result2->close();
  }
    ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-shopping-basket col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Products</div>
                        <div class="number"><?php 
             $sql3="SELECT count(*) As ptotal FROM `product`";
  
             if ($result3 = $con->query($sql3)) {    
        while ($row3 = $result3->fetch_object()) {

       echo $row3->ptotal;
        
    }
    $result3->close();
  }
    ?></div>
                    </div>
                </div>
            </div>  

            
        </div>
        
        <div class="row clearfix">
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
            <h2>New Patient <small >18% High then last month</small></h2>
                   <ul class="header-dropdown">
                   <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                           <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);"></a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">70.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-indigo">25.80%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-indigo">12.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                 data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Heart Surgeries <small>18% High then last month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-blue-grey">80.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-blue-grey">13.00%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-blue-grey">9.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
                                 data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Medical Treatment <small>18% High then last month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-green">84.60%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-green">15.40%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-green">5.10%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                                 data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
                                 data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> New Patient List <small>past few entries</small> </h2>
                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>PhoneNO</th>
                                </tr>
                                </thead>
                                <tbody>
  <?php
$resq='SELECT PatientName,Email,MobileNo,PatientID
FROM patient p ORDER BY p.PatientID DESC  LIMIT 5';
  
             if ($resp = $con->query($resq)) {    
        while ($prow = $resp->fetch_object()) {

?>
                    <tr>                     
                    <td><?php  echo $prow->PatientName; ?></td>
                    <td><?php echo $prow->Email; ?></td>
                    <td><?php echo $prow->MobileNo; ?></td>
                       </tr>              
    
    <?php 
     
    }
    $resp->close();
  }

    ?>
                               
                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
	</div>
</section>

<script type="text/javascript">
  /*Threshold plugin for Chartist start*/
  var appointment = [];
  <?php
    for ($i = 01; $i < 13; $i++) { 
    $count = 0;
    $sql ="SELECT * FROM appointment WHERE (status !='') and delete_status='0' and MONTH(appointmentdate) = '".$i."'";$qsql = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($qsql);
  ?>
        appointment.push(<?php echo $count; ?>);
  <?php } ?>
    new Chartist.Line('.ct-chart1', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','July','Oct','Sep','Oct','Nov','Dec'],
        series: [
            appointment
        ]
    }, {
        showArea: false,

        axisY: {
            onlyInteger: true
        },
        plugins: [
            Chartist.plugins.ctThreshold({
                threshold: 4
            })
        ]
    });

    var defaultOptions = {
        threshold: 0,
        classNames: {
            aboveThreshold: 'ct-threshold-above',
            belowThreshold: 'ct-threshold-below'
        },
        maskNames: {
            aboveThreshold: 'ct-threshold-mask-above',
            belowThreshold: 'ct-threshold-mask-below'
        }
    };

    //Second Chat
    var patient = [];
    <?php
      for ($i = 01; $i < 13; $i++) { 
      $count_patient = 0;
      $sql ="SELECT * FROM patient WHERE (status !='') and delete_status='0' and MONTH(admissiondate) = '".$i."'";
      $qsql = mysqli_query($conn,$sql);
      $count_patient = mysqli_num_rows($qsql);
    ?>
          patient.push(<?php echo $count_patient; ?>);
    <?php } ?>

    new Chartist.Line('.ct-chart1-patient', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','July','Oct','Sep','Oct','Nov','Dec'],
        series: [ patient
        ]
    }, {
        showArea: false,

        axisY: {
            onlyInteger: true
        },
        plugins: [
            Chartist.plugins.ctThreshold({
                threshold: 4
            })
        ]
    });

    var defaultOptions = {
        threshold: 0,
        classNames: {
            aboveThreshold: 'ct-threshold-above',
            belowThreshold: 'ct-threshold-below'
        },
        maskNames: {
            aboveThreshold: 'ct-threshold-mask-above',
            belowThreshold: 'ct-threshold-mask-below'
        }
    };

</script>

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

<?php include 'footer.php'; ?>

</html>