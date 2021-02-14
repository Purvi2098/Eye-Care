<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include 'aheader.php';
$rmark=" ";

if(isset($_POST['submit'])){


        $Test= $_FILES["file"]["name"];
        $tmpname= $_FILES["file"]["tmp_name"];

        $rmark=$_POST['rmark'];
        $PatientID=$_POST['PatientID'];
        


        move_uploaded_file($tmpname,"TestReport/$Test");

        $q = "INSERT INTO `test`(`PatientID`, `Report`, `Remark`) VALUES ('$PatientID','$Test','$rmark')";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
            
            echo "<script>alert('Report Uploaded..');</script>";
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
						<h3 >Add Test Report</h3>
					</div>
						
					<form action="#" method="post" enctype="multipart/form-data">

					<div class="body">
                        
                        <div class="row clearfix">
                             <div class="col-sm-3 ">
                                <div class="form-group drop-custum">
                                    Select Patient Id:
                                    <select  name="PatientID" class="form-control show-tick">
                                         
                                         <?php 
                                            $sqllogin="SELECT PatientID FROM `patient`";
                                              
                                             if ($result = $db->query($sqllogin)) {    
                                                 while ($row = $result->fetch_assoc()) {  
                                       ?>                                         
                                        <option><?php echo $row["PatientID"]; ?></option>
                                          <?php           
                              }
                         $result->close();
                            }

             ?>
                                    </select>
                                </div>
                            </div>
                         
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                            <input type="file" name="file" required=""><br>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="rmark" class="form-control" placeholder="Remark">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <input  type="submit" name="submit" class="btn btn-raised g-bg-cyan" value="Submit">
                                <input type="reset" class="btn btn-raised" value="reset">
                            </div>
                        </div>
                    </div>
                	</form>
				</div>
			</div>
		</div>
        <?php include 'footer.php'; ?>
