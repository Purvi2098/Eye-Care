
<?php 
 $con=mysqli_connect("localhost","root","","eyecareclinic");
include('aheader.php');

 ?>

<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Patients</h2>
            <small class="text-muted">Eye care clinic</small>
        </div>

         <?php 
                        $sqllogin="SELECT * FROM `patient`";
                          
                         if ($result = $con->query($sqllogin)) {    
                             while ($row = $result->fetch_object()) { 

        ?>
        <div class="row clearfix">
            <div class="col-lg-8">
                <div class="card all-patients">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 m-b-0">
                       
                                <h5 class="m-b-0"><?php echo $row->PatientName; ?></h5> 
                                <address class="m-b-0">
                                   <?php echo $row->Email; ?><br>
                                </address>
                                    <abbr title="Phone"><strong>Phone :</strong></abbr> <?php echo $row->MobileNo; ?>

                                
                                
                            </div>
                        </div>
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
</section>

