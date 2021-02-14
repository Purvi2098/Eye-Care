<?php 
include 'header.php';
include 'conetDB.php';
$id= $_SESSION['patientid'];

if(isset($_POST['contactmail']))
{
  $cnt='G';
  $fd=$_POST['experience'];
  if($fd == 'bad')
    {$cnt='B';}
  elseif ($fd == 'average') {
    $cnt='A';
  }else
  {
    $cnt='G';
  }

  $comt=$_POST['comments'];
  
  $quey="INSERT INTO `feedback`( `PatientID`, `Rating`, `Description`) VALUES('".$id."','".$cnt."','".$comt."')";
  $result2 = mysqli_query($con,$quey);
      $row2 = @mysqli_num_rows($result2);
    
    if($row2!=0){
      echo  "<div class='alert alert-danger'>Try again after some time</div>";
    }else{
      echo  "<div class='alert alert-success'>Thank you for your feedback</div>";
    }

}


 ?>
<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center mt-30">
      <div class="col-md-10">
        <div class="section-title text-center">
            <h6>We are exteremly happy to Hear you.</h6>
            <h2 class="title-effect">Give your feedback</h2>
            <p class="mb-50">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you!
        </div>
       </div>
      <div class="col-lg-12">
       
          <form id="contactmail"  method="post" action="#">
           <div class="row">
                <div class="col-sm-12 form-group">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad"  >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" checked="" >
                    Good
                    </label>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
           
                       
              <div >
                   <button id="contactmail" name="contactmail" type="submit" value="Send" class="button"><span> Send Feedback </span> <i class="fa fa-paper-plane"></i></button>
              </div>

            </div>
          </form>
           
        </div>
    </div>
    

  </div>
</section>
<?php include 'footer.php'; ?>