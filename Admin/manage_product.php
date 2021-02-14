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
        <h3 class="modal-title">Edit Product Detail</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="edit_product.php" method="POST" autocomplete="off">
                    <input type="hidden" name="update_id" class="form-control" id="update_id" > 

                       <div class="form-group">
                        <h5><label class="col-form-label">Product Name </label></h5>
                        <input type="text" name="pname" class="form-control" id="pname" >
                      </div>

                      <div class="form-group">
                        <h5><label class="col-form-label">Description </label></h5>
                        <input type="text" name="pdesc" class="form-control" id="pdesc" >
                      </div>

                     <div class="form-group">
                        <h5><label class="col-form-label" >Stock </label></h5>
                        <input type="text"  name="pstock" class="form-control" id="pstock" >
                      </div>

                      <div class="form-group">
                        <h5><label class="col-form-label">Cost </label></h5>
                        <input type="text" name="pcost" class="form-control" id="pcost" >
                      </div>
                      
                      <div class="form-group pull-right">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No, don't update</button>

                        <button type="submit" class="btn btn-outline-primary" name="updateProduct">Update</button> 
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
        <h3 class="modal-title">Delete Product</h3></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        

      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="delete_product.php" method="POST" autocomplete="off">
                    <input type="hidden" name="delete_id" class="form-control" id="delete_id" > 
                   
                    <h4> Are you sure, you want to delete ??? </h4>
                      <div class="form-group pull-right">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>

                        <button type="submit" class="btn btn-outline-primary" name="delete_product">Yes!! Delete it</button> 
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
            <h2>Manage product inventory</h2>
            <small class="text-muted">Welcome to Eye Care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                  <h2>All product details</h2>                        
                    </div>
    <div  class="body table-responsive">
     <form action="" method="post">
    <table id="data_tableid" width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <th>#</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Cost</th>
            <th>Action</th>

        </thead>
        <tbody>
        <?php
            
            $query=mysqli_query($conn,"select * from `product`");
            while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?php echo $row['ProductID']; ?></td>

                <td><img src="uploads/<?php echo $row['Image']; ?>" class="img-thumbnail" alt="profile-image" style="height: 50px;width: 50px;"></td>
                <td><?php echo $row['ProductName']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Stock']; ?></td>
                <td><?php echo $row['Cost']; ?></td>
                <td>
                  <button type="button" class="btn btn-outline-success editdetail"><i class="zmdi zmdi-edit"></i> </button>
          <button type="button" class="btn btn-outline-success deletedetail"><i class="zmdi zmdi-delete"></i> </button>
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
              $("#pimage").val(data[1]);
              $("#pname").val(data[2]);
              $("#pdesc").val(data[3]);
              $("#pstock").val(data[4]);
              $("#pcost").val(data[5]);

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