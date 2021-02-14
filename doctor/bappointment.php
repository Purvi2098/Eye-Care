<?php  
include 'aheader.php'; 
 $conn=mysqli_connect("localhost","root","","eyecareclinic");


 ?>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<div class="modal" id="deletedetail">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>
        <h3 class="modal-title">Cancel appoiment</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="delete_appointment.php" method="POST" autocomplete="off">
                    <input type="hidden" name="delete_id" class="form-control" id="delete_id" > 
                    <input type="hidden" name="date" class="form-control" id="date" > 
                    <input type="hidden" name="time" class="form-control" id="time" > 
                   
                    <h4> Have u done with patient ??? </h4>
                      <div class="form-group pull-right">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>

                        <button type="submit" class="btn btn-outline-primary" name="Cancel_appointment">Yes!! Check up Done</button> 
                      </div>

                      </form>
                </div>
            </div>

        </div>

    </div>
  </div>
</div>



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointments</h2>
            <small class="text-muted">Welcome to Eye Care clinic</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                  <h2>All Today's appointments</h2>                        
                    </div>
    <div  class="body table-responsive">
     <form action="" method="post">
    
    <table id="appointTable" width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <th>#</th>
           <th>Name</th>
           <th>Date</th>
           <th>Time</th>
           <th>Contact No</th>
           <th>Actions</th>
        </thead>
        <tbody>
        <?php
            
            $query=mysqli_query($conn,"SELECT appointment.status,appointment.Date,appointment.Time,appointment.PatientID,patient.PatientName,patient.MobileNo FROM appointment,patient WHERE appointment.PatientID=patient.PatientID and appointment.Date=CURDATE();");
            while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                
                <td><?php echo $row['PatientID']; ?></td>
                <td><?php echo $row['PatientName']; ?></td>
                <td><?php echo $row['Date']; ?></td>
                <td><?php echo $row['Time']; ?></td>
               <td><?php echo $row['MobileNo']; ?></td>

                <td>
                  <?php if($row['status'] == false){ ?>
          <button type="button" class="btn btn-outline-success deletedetail"><i class="zmdi zmdi-delete"></i> Trash</button>
                </td>
              <?php }else{ ?>
        <button type="button" class="btn btn-outline-danger donecheckup"><i class="zmdi zmdi-delete"></i> Trash</button>

              <?php } ?>

                </tr>
                <?php
            }
        ?>      
        </tbody>

    </table>
</form>
                    </div>

                       </div>
                       </div>
                       <br><br>
                   </div>
              <br><br><br><br>
              </div>
           </section>

           <?php include 'footer.php'; ?>


<script>
  $(document).ready(function() {
    $('#appointTable').dataTable();

});
</script>

<script>
    $(document).ready(function(){

   $(".deletedetail").click(function(){
           $("#deletedetail").modal("show");
            $tr=$(this).closest('tr');

           var data= $tr.children("td").map(function(){
            return $(this).text();
           }).get();

           console.log(data);

            $("#delete_id").val(data[0]);
                 $("#date").val(data[2]);
                  $("#time").val(data[3]);
                   
          
});

  });
</script>
<script>
    $(document).ready(function(){

   $(".donecheckup").click(function(){
          
          alert('patient check up is already done..');                   
          
});

  });
</script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>