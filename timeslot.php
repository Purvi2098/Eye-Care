<a href="Booking.php" ><input type="button" class="btn btn-outline-primary" name="
  go Back" value="Go back" /> </a>

<?php 

session_start();
$Pid=$_SESSION['patientid'];

/*$id=$_SESSION['PatientName'];
echo $id;
echo $Pid;
*/
//include('header.php');
include('conetDB.php');

if(isset($_GET['date'])){
    $date=$_GET['date'];
    $_SESSION['date']=$date;

$stmt=$con->prepare("select * from appointment where Date = ?");
$stmt->bind_param('s',$date);
$bookings= array();
if($stmt->execute()){
    $result=$stmt->get_result();
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            $bookings[]=$row['Time'];
        }

        $stmt->close();
    }
}
}

if(isset($_POST['submit'])){  
   
    $timeslot=$_POST['timeslot'];
    $_SESSION['time']=$timeslot;

    $query = "insert into appointment(PatientID,Date,Time) values('".$Pid."','".$date."','".$timeslot."')";
    $result = mysqli_query($con,$query);
    $row = @mysqli_num_rows($result);

  if($row!=0)
  {      
    $msg="<div class='alert alert-success'>Booking not Sucessfull</div>";
    $bookings[]=$timeslot;

  }else{

    $msg="<div class='alert alert-success'>Booking sucessfull</div>";
    $TO=$_SESSION['email'];
  // echo $_SESSION['email'];
  require 'Mail/phpMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer;
  
  $mail->IsSMTP();
  //$mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "17bmiit025@gmail.com";
  $mail->Password = "Purvi2098";

  $mail->setFrom('EyeCare@gmail.com', 'Support');
  $mail->addAddress($TO, 'Users');
  //$mail->addReplyTo($TO, 'Users');
  $mail->isHTML(true);

  $mail->Subject = 'Appointment conformation';
  $mail->Body = '<B><center><div>
          <h2 style=color:green;>Eye Care Clinic</h2>
      <hr>
          <br>
           <p>
           Thank you for  trusting us.This to conform your Appointment to our clinic.
      </p>Date:  '. $_SESSION['date']."  Appointed Time:  " .$_SESSION['time'] . '<br></center>
           </B>';
  $mail->AltBody = 'Dear user, Thank you for your Support.';

  if(!$mail->send()) {
    echo "<script>alert('<center style=color:blue;><b>  <h3>  
      Something went wrong please try again later.
      </center></b> </h3>')</script>";  
    
  } 


   


  }
}
$duration=30;
$cleanup=0;
$start="9:00";
$end="15:00";

function timeslots($duration,$cleanup,$start,$end){
    $start= new DateTime($start);
    $end= new DateTime($end);
    $interval= new DateInterval("PT".$duration."M");
    $clenupinterval= new DateInterval("PT".$cleanup."M");
    $slots=array();


        for($intstart =$start; $intstart<$end; $intstart->add($interval)->add($clenupinterval)){
            $endPeriod= clone $intstart;
            $endPeriod->add($interval);

            if($endPeriod>$end){
                break;
            }

            $slots[] = $intstart->format("H:iA")." - ".$endPeriod->format("H:iA");
        
        }

        return $slots;

}

?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<br>
<br>
<hr>
<h3 style="text-align: center; color: gray;"><em>Select your appointment timing</em><br><small><?php echo $date; ?></small></h3>
<hr>

<div class="container">
   
<div class="row">
    <div class="col-md-12">
        <?php echo isset($msg)?$msg:""; ?>
    </div>
<?php
 $timeslots = timeslots($duration,$cleanup,$start,$end);
        foreach ($timeslots as $ts) {
            ?>

            <div class="col-lg-4">
                <div class="form-group">

                <?php if(in_array($ts,$bookings)){ ?>

        <button type="button" class="btn btn-danger"><?php echo $ts; ?></button>
                <?php }else{ ?>
<button type="button" class="btn btn-outline-success book" data-toggle="modal" data-target=".bd-example-modal-lg" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                  <?php } ?>  
                
                </div>
            </div>
<?php
        }

 ?>
 </div>
    <br>
    <br>
    <br>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Confirm Booking for :<br><small><?php echo $date; ?> &#124; <span id="slot"></span></small></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                        <label>Selected Time </label>
                        <input type="text" readonly required=""  name="timeslot" class="form-control" id="timeslot" >
                      </div>

                     

                      <div class="form-group">
                        <label>Age : </label>
                        <input type="text" required="" name="name" class="form-control" id="name" >
                      </div>

                      <div class="form-group">
                        <label>Disease : </label>
                        <input type="checkbox"  >Blood Presure &nbsp;
                       <input type="checkbox"  >Diebetics<br>
                       Any other(Specify):<input type="text" class="form-control" >

                      </div>
                      
                      <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
                      </div>

                      </form>
                </div>
            </div>

        </div>

    </div>
  </div>
</div>

<script>
    $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
        $("#slot").html(timeslot);

        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
    })
</script>


<!--=================================
 footer -->

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

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