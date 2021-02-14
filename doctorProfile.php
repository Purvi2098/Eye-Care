<?php
include 'conetDB.php';
include 'header.php';
$dname=$_GET['name'];
$id=$_GET['ID'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctor profile</title>
</head>
<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-18.gif" alt="">
</div>

<?php $sqllogin="SELECT * FROM `doctor` where DoctorID='".$id."'";                   
              if ($result = $con->query($sqllogin)) {    
             while ($row = $result->fetch_assoc()) { 
    ?>
<section class="page-section-ptb">
  <div class="container">
     <div class="row">
         <div class="col-lg-6">
           <img class="img-fluid full-width mb-20" src="docImage/<?php echo $row['Image']; ?>" alt="">
         </div>
         <div class="col-lg-6">
           <div class="section-title">
            <h6>Know About me </h6>
            <h2 class="title-effect">Dr. <?php echo $dname; ?></h2>
            <p>I have <?php echo $row['Experience']; ?> years of experience as an
            ophthalmologist.</p>
          </div>
           <p>If you have any query you are free to mail directly to me on <b><?php echo $row['Email']; ?></b> Or <br>  contact me on <b><?php echo $row["MobileNo"]; ?></b></p>
             
           </div>
     </div>
  </div>
  </section>
  
 <?php           
                              }
                         $result->close();
                            }

             ?>

</div>



<?php include 'footer.php'; ?>
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
