<?php
include 'aheader.php'; 
$conn = mysqli_connect("localhost","root","","eyecareclinic");

?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Feedback</h2>
            <small class="text-muted">Welcome to Eye Care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                  <h2>Feedback</h2>                        
                    </div>
    <div  class="body table-responsive">
     <form action="" method="post">
    <table id="data_tableid" width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Rating</th>
            <th>Comments</th>
            
        </thead>
        <tbody>
        <?php
            
            $fqury="select patient.PatientName,feedback.Rating,feedback.Description from feedback,patient where feedback.PatientID=patient.PatientID;";
            $cnt="1";
            $query=mysqli_query($conn,$fqury);
            while($row=mysqli_fetch_array($query)){

                ?>
                <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $row['PatientName']; ?></td>

                <?php if($row['Rating'] == 'G'){ ?>
                <td>Good</td>
              <?php }elseif ($row['Rating'] == 'A') { ?>
                <td>AVERAGE</td>
              <?php     }else{ ?>
                <td>BAD</td>
              <?php } ?>
              
                <td><?php echo $row['Description']; ?></td>
                
                                    
                </tr>
                <?php
                $cnt=$cnt+1;
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