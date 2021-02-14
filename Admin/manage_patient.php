<?php
include 'aheader.php'; 
$conn = mysqli_connect("localhost","root","","eyecareclinic");

?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">



<!-- exit pop up form -->
<div class="modal" id="editmodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>
        <h3 class="modal-title">Edit Patient Data</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="edit_patient.php" method="POST" autocomplete="off">
                    <input type="hidden" name="update_id" class="form-control" id="update_id" > 

                      <div class="form-group">
                        <h5><label class="col-form-label">Name</label></h5>
                        <input type="text" name="pname" class="form-control" id="pname" >
                      </div>

                     <div class="form-group">
                        <h5><label class="col-form-label" >Email </label></h5>
                        <input type="text"  name="pemail" class="form-control" id="pemail" >
                      </div>

                      <div class="form-group">
                        <h5><label class="col-form-label">Phone Number</label></h5>
                        <input type="text" name="pphone" class="form-control" id="pphone" >
                      </div>
                      
                      <div class="form-group pull-right">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No, don't update</button>

                        <button type="submit" class="btn btn-outline-primary" name="updatePatient">Update</button> 
                      </div>

                      </form>
                </div>
            </div>

        </div>

    </div>
  </div>
</div>


<!-- delete pop up form -->
<div class="modal" id="deletedetail">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4>
        <h3 class="modal-title">Delete Patient Data</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="delete_patient.php" method="POST" autocomplete="off">
                    <input type="hidden" name="delete_id" class="form-control" id="delete_id" > 
                   
                    <h4> Are you sure, you want to delete ??? </h4>
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Patient Records</h2>
            <small class="text-muted">Welcome to Eye Care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                  <h2>All registered patient account</h2>                        
                    </div>
    <div  class="body table-responsive">
     <form action="" method="post">
    <table id="data_tableid" width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php
            
            $query=mysqli_query($conn,"select * from `patient`");
            while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                
                <td><?php echo $row['PatientID']; ?></td>
                <td><?php echo $row['PatientName']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['MobileNo']; ?></td>
                <td>
                    <button type="button" class="btn btn-outline-success editdetail"><i class="zmdi zmdi-edit"></i> Edit</button>
          <button type="button" class="btn btn-outline-success deletedetail"><i class="zmdi zmdi-delete"></i> Trash</button>
                </td>

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
    $(document).ready(function(){
        
        $(".editdetail").click(function(){
             $("#editmodal").modal("show");

             $tr=$(this).closest('tr');

             var data= $tr.children("td").map(function(){
                return $(this).text();
             }).get();

             console.log(data);

              $("#update_id").val(data[0]);
              $("#pname").val(data[1]);
              $("#pemail").val(data[2]);
              $("#pphone").val(data[3]);

});

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
            
          
});

  });
</script>
<script>
  $(document).ready(function() {
    $('#data_tableid').DataTable();
} );
</script>

<script src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>