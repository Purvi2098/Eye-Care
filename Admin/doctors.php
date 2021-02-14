<?php include 'aheader.php';
     $con=mysqli_connect("localhost","root","","eyecareclinic");


  ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Doctors</h2>
            <small class="text-muted">Welcome to Eye Care Clinic</small>
        </div>
        <div class="row clearfix">

            <?php 
                        $sqllogin="SELECT * FROM `doctor`";
                          
                         if ($result = $con->query($sqllogin)) {    
                             while ($row = $result->fetch_assoc()) {  
                   ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                                <img src="../docImage/<?php echo $row['Image']; ?>" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <h4 class="m-b-5 m-t-20"><?php echo $row["DoctorName"]; ?></h4>
                                <p class="text-muted"><span> <a href="javascript:void(0);" class="text-pink"><?php echo $row["Email"]; ?></a> </span></p>
                            </div>

                            <p class="text-muted">Mobile: <?php echo $row["MobileNo"]; ?></p>    
                            <p class="text-muted">Registered No: <?php echo $row["RegisteredNo"]; ?></p>                         
        
                        </div>
                    </div>
                </div>
            </div>
             <?php           
                              }
                         $result->close();
                            }

             ?>

        </div>
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="addDoctor.php" class="btn btn-raised g-bg-cyan">Add Doctor</a>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
