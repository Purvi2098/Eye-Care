<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include 'aheader.php';

if(isset($_POST['submit'])){



// File upload path

        $PatientID=$_POST['Prescription'];
        $MedName=$_POST['medname'];
        $morningdose=$_POST['mdose'];
        $afternoondose=$_POST['adose'];
        $eveningdose=$_POST['edose'];
        $units=$_POST['units'];
     

        

        $q = "INSERT INTO `tbl_prescription`(`PatientID`, `MedicineName`, `Morning_dose`, `Aftrnon_dose`, `Evening_dose`, `Units`) VALUES ('$PatientID','$MedName','$morningdose','$afternoondose','$eveningdose','$units')";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
            
            echo "<script>alert('Prescription Added');</script>";
        }

}


?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Welcome to</h2>
            <small class="text-muted">Eye care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h3 >Add Prescription</h3>
                    </div>
                        
                    <form action="#" method="post" enctype="multipart/form-data">

    
                  <div class="col-sm-3 ">
                    <div class="form-group drop-custum">
                 <select name="Prescription" required="" class="form-control show-tick" >

                    <option value="0" selected="false">---Select PatientID---</option>       
                    <?php 
                        $sql4="SELECT PatientID FROM patient";
                          
                         if ($result4 = $db->query($sql4)) {    
                             while ($row4 = $result4->fetch_assoc()) {  
                                ?>
                    
                            <option value=<?php echo $row4["PatientID"]; ?> ><?php echo $row4["PatientID"]; ?></option>
                                
                            <?php   }
                         $result4->close();
                            } ?>
                                   </select>
                                </div>
                            </div>
                         
                       
                            <br>
                          
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="medname" required="" placeholder="Medicine Name">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="mdose" class="form-control" required="" placeholder="Morning dose">
                                    </div>
                                </div>
                            </div>

                             <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="adose" class="form-control" required="" placeholder="Afternoon dose">
                                    </div>
                                </div>
                            </div>

                             <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="edose" class="form-control" required="" placeholder="Evening dose">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="units" class="form-control no-resize" placeholder="Units" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input  type="submit" name="submit" class="btn btn-raised g-bg-cyan" value="Submit">
                                <input type="reset" class="btn btn-raised" value="reset">
                            </div>
                             <br>
            <br>
            <br>
                        </div>
                    </div>
                    </form>
                       
                </div>

            </div>

        </div>

<?php include 'footer.php'; ?>
