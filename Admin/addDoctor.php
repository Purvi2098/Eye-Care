<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include 'aheader.php';

if(isset($_POST['submit'])){

        $docimg= $_FILES["image"]["name"];
        $tmpname= $_FILES["image"]["tmp_name"];

        $DoctorName=$_POST['Dname'];
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $Email=$_POST['email'];
        $MobileNo=$_POST['phone'];

        $Certificate= $_FILES["image2"]["name"];
        $Tmp_cer= $_FILES["image2"]["tmp_name"];

        $Experience=$_POST['Experience'];
        $rno=$_POST['rno'];

       move_uploaded_file($tmpname,"../docImage/$docimg");
       move_uploaded_file($Tmp_cer,"../docImage/Certificate/$Certificate");

         $q="INSERT INTO `doctor`(`DoctorName`, `Image`, `Username`, `Password`, `Email`, `MobileNo`, `Certificate`, `Experience`, `RegisteredNo`) VALUES ('$DoctorName','$docimg','$Username','$Password','$Email','$MobileNo','$Certificate','$Experience','$rno')";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
            
            echo "<script>alert('Doctor Added');</script>";
        }
        else{
            echo "Soory". $db->mysql_error();
        }


}

?>
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Doctor</h2>
           
            <small class="text-muted">Welcome to Eye Care Clinic</small>
        </div>

        <form action=" " method="post" enctype="multipart/form-data">
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="Dname" class="form-control" placeholder="Doctor Name">
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <div class="dz-message">  
                                    <div class="col-form-label">Doctor Image:          </div>  
                                    <div class="fallback">
                                        <input name="image" type="file" name="docimg" id="image" class="dropzone" method="post" enctype="multipart/form-data" />
                                    </div>   
                                     </div>



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="Username"  placeholder="User Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  name="Password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="rno" class="form-control" placeholder="Registerd No">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="Experience" placeholder="Experince">
                                    </div>
                                </div>
                            </div>

                            <div class="dz-message">   
                            <div class="col-form-label">Certificate :</div>
       
                                    <div class="fallback">
                                        <input name="image2" type="file" id="image2" class="dropzone" method="post" enctype="multipart/form-data" />
                                    </div>   
                              </div>
                              <br>
                              <br>
                            <div class="col-sm-12">
                                <input  type="submit" name="submit" class="btn btn-raised g-bg-cyan" value="Submit">
                                <input type="reset" class="btn btn-raised" value="reset">
                            </div>
        
                        </div>
                    </div>
				</div>
			</div>
        </div>
		</div>		
    </form>
</div>
</section>
<?php include 'footer.php'; ?>
