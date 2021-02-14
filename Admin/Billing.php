<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
include 'aheader.php';

$docfee=0;
$testfee=0;
$othercharges=0;

if(isset($_POST['submit'])){
      
       
        $PatientID=$_POST['PatientID'];
        $testfee=$_POST['testfee'];
        $docfee=$_POST['docfee'];
        $othercharges=$_POST['othercharges'];       

$q = "INSERT INTO `tbl_billing`(`PatientID`, `TestFee`, `DoctorFee`, `OtherCharges`) VALUES ('$PatientID','$testfee','$docfee','$othercharges')";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
            
            echo "<script>alert('Added Sucessfully..');</script>";
            echo "comple";
        }else
        {
           echo "<script>alert('Try again after some time');</script>";
           echo ("srry". mysqli_error($db));

        }


}

?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Welcome to</h2>
            <small class="text-muted">Eye care clinic</small>
        </div>

        <div class="col-md-12 text-right hidden-print">
                               
        <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                                 <hr>
                                
        </div>

        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="card">
					<div class="header">
						<h3 >Billing</h3>
					</div>
						
					<form action="" method="post">

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
                                            <input type="text" name="testfee" class="form-control" placeholder="Enter Test Fees"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="docfee" class="form-control" placeholder="Enter Doctors Fees">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="othercharges" class="form-control" placeholder="Enter Other charges.">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-12">
                                <input  type="submit" name="submit" Id="submit" class="btn btn-raised g-bg-cyan" value="Submit">
                                
                            </div>
                        </div>
                    </div>
                	</form>
				</div>
			</div>
		</div>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>

        <?php include 'footer.php'; ?>