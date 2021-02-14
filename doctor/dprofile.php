<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include 'aheader.php';
 
$id=$_SESSION['doctorid'];
    
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <small class="text-muted">Eye care clinic</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="card">
					<div class="header">
						<h3 >Profile</h3>
					</div>
						<?php $sqllogin="SELECT * FROM `doctor` where DoctorID='".$id."'";                   
              if ($result = $db->query($sqllogin)) {    
             while ($row = $result->fetch_assoc()) { ?> 
				<form action="#" method="post" >

					<div class="body">
                         <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                     <label class="form-control">Doctor name :</label>
                                </div>
                            </div>
                            <div class="col-lg-10 ">
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" readonly="" class="form-control" name="dname"  value=<?php echo $row["DoctorName"]; ?> />
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                     <label class="form-control">User-name :</label>
                                </div>
                            </div>
                            <div class="col-lg-10 ">
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" name="uname" class="form-control" value=<?php echo $row["Username"]; ?> />
                                    </div>
                                </div>
                            </div>                         
                        </div>


                        <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                     <label class="form-control">Password :</label>
                                </div>
                            </div>
                            <div class="col-lg-10 ">
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" name="pass" class="form-control" value=<?php echo $row["Password"]; ?> />
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-2">
                                <div class="form-group">
                                     <label class="form-control">Email :</label>
                                </div>
                            </div>
                            <div class="col-lg-10 ">
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" name="email" class="form-control" value=<?php echo $row["Email"]; ?> />
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                     <label class="form-control">Registered Number :</label>
                                </div>
                            </div>
                            <div class="col-lg-9 ">
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" readonly="" class="form-control" value=<?php echo $row["RegisteredNo"]; ?> />
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="col-sm-12">
                                <input  type="submit" name="update" class="btn btn-raised g-bg-cyan" value="Update">
                        </div>
                    
                    </div>
                	</form>
                    <?php           
                              }
                         $result->close();
                            }

             ?>
				</div>
			</div>
		</div>
</section>

<?php
    if(isset($_POST['update'])){


  $user=$_POST['uname'];
  $pass=$_POST["pass"];
  $email=$_POST["email"];

    $sqlupdate="UPDATE `doctor` SET `Password`='".$pass."' , `Username`='".$user."', `Email`='".$email."' where `DoctorID`='".$id."' ";
  
    $result2 = mysqli_query($db,$sqlupdate);
    
    if($result2 == TRUE){
      echo  "<b><font color='#FF0000'><script>alert('Sucsessfully changed')</script>";
    }

    }


  ?>   
    