<?php 
 $con=mysqli_connect("localhost","root","","eyecareclinic");
include('aheader.php');

 ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Patients</h2>
            <small class="text-muted">Eye Care Clinic</small>

        </div>
        

        <div class="row clearfix">

             <?php 
                        $sqllogin="SELECT * FROM `patient`";
                          
                         if ($result = $con->query($sqllogin)) {    
                             while ($row = $result->fetch_object()) { 

        ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">        

                            <div class="alert-light">
                                <h4 class="m-b-5 m-t-20"><?php echo $row->PatientName; ?></h4>
                                <p class="text-muted"><span><a href="" class="text-pink"><b>Email:</b> <?php echo $row->Email; ?></a> </span></p>

                                
                            </div>
                            <p style="color: black;"> <a href="" class="text-dark"><b>Username: </b><?php echo $row->Username; ?></a> </p>
                                <p class="text-muted"><span> <a href="" class="text-dark"><b>Password:  </b><?php echo $row->Password; ?></a> </span></p>

                            <p class="text-muted">Mobile: <?php echo $row->MobileNo; ?></p>    

        
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
       
    </div>
</section>
<?php include 'footer.php'; ?>
