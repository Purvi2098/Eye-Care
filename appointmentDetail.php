<?php
include 'header.php'; 
include 'conetDB.php';
$pname=$_SESSION['PatientName'];
$id=$_SESSION['patientid'];


?>
<!-- delete pop up form -->
<div class="modal" id="deletedetail">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>
        <h3 class="modal-title">Cancel appointment</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="Cancel_appointment.php" method="POST" autocomplete="off">
                                  

                    <h4> Are you sure, you want to cancel appointment for  
                    <span id="ddate" name="ddate"></span><label class="col-form-label" id="dtime" name="dtime"></label>

                  </h4>
                      <div class="form-group pull-right">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>

                        <button type="submit" class="btn btn-outline-primary" name="delete_patient">Yes!! Delete it</button> 
                      </div>

                      </form>
                </div>
            </div>

        </div>

    </div>
  </div>
</div>

<br>
<br>


<title>Appointment</title>


<div style="padding: 30px">
<div class="row mt-50">
      <div class="col-lg-12 col-md-12">
      <h3 class="mb-30">Appointment </h3>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>action</th>
          </tr>
        </thead>

        <tbody>
        <?php 
          $sqllogin="SELECT Date,Time FROM appointment where PatientID='".$id."' and Date >= CURDATE(); ";
                          
       if ($result = $con->query($sqllogin)) {    
         while ($row = $result->fetch_object()) { 

        ?>
          <tr>
            <td><?php echo $pname; ?></td>
            <td><?php echo $row->Date; ?></td>
            <td><?php echo $row->Time; ?></td>
            <td><button type="button" class="btn btn-outline-success deletedetail"><i class="zmdi zmdi-delete"></i> Cancel</button></td>
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
<br>
<br>

<script>
    $(document).ready(function(){

   $(".deletedetail").click(function(){
           $("#deletedetail").modal("show");
            $tr=$(this).closest('tr');

           var data= $tr.children("td").map(function(){
            return $(this).text();
           }).get();

           console.log(data);

            $("#ddate").val(data[1]);
            $("#dtime").val(data[2]);

            
          
});

  });
</script>

<?php include 'footer.php'; ?>