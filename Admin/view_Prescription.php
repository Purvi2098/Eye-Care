<?php  
include 'aheader.php'; 
 $con=mysqli_connect("localhost","root","","eyecareclinic");


 ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Prescription</h2>
            <small class="text-muted">Welcome to Eye Care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Your Prescription</h2>                        
                    </div>
                    
                     <div class="col-md-12 text-right hidden-print">
                               
                                <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                                 <hr>
                                
                        </div>


                    <div class="body table-responsive">
                        <table id="data_tableid" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>Medicine Name</th>
                                    <th>Morining dosage</th>
                                    <th>Afternoon dosage</th>
                                    <th>Evening dosage</th>
                                    <th>Units</th>
                                    
                                </tr>
                            </thead>
                            <?php 
            $sqllogin="SELECT * FROM tbl_prescription ";
                                  
               if ($result = $con->query($sqllogin)) {    
                 while ($row = $result->fetch_object()) { 

        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row->PatientID; ?></td>
                                    <td><?php echo $row->MedicineName; ?></td>
                                    <td><?php echo $row->Morning_dose; ?></td>
                                    <td><?php echo $row->Aftrnon_dose; ?></td>
                                    <td><?php echo $row->Evening_dose; ?></td>
                                    <td><?php echo $row->Units; ?></td>
                                    
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
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<script>
  $(document).ready(function() {
    $('#data_tableid').DataTable();
} );
</script>
