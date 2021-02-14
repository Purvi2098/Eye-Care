<?php  
include 'header.php'; 
 $con=mysqli_connect("localhost","root","","eyecareclinic");

$Pid=$_SESSION['patientid'];
 ?>

    <div class="container-fluid">
       
        
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <br><br>
                        <h2>Your Prescription</h2>   
                        <br>                     
                    </div>
                    
                                       <div class="body table-responsive">
                        <table id="data_tableid" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Medicine Name</th>
                                    <th>Morining dosage</th>
                                    <th>Afternoon dosage</th>
                                    <th>Evening dosage</th>
                                    <th>Units</th>
                                    
                                </tr>
                            </thead>
                            <?php 
            $sqllogin="SELECT * FROM tbl_prescription where PatientID='".$Pid."' ";
                                  
               if ($result = $con->query($sqllogin)) {    
                 while ($row = $result->fetch_object()) { 

        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row->MedicineName; ?></td>
                                    <td><?php echo $row->Morning_dose; ?></td>
                                    <td><?php echo $row->Aftrnon_dose; ?></td>
                                    <td><?php echo $row->Evening_dose; ?></td>
                                    <td><?php echo $row->Units; ?></td>
                                    
                                </tr>
                                
         <?php           
                              }
                         $result->close();
                            }

          ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <br><br><br>





<?php include 'footer.php'; ?>

