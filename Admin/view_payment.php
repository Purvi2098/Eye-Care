<?php 
 $con=mysqli_connect("localhost","root","","eyecareclinic");
include('aheader.php');
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Payments</h2>
            <small class="text-muted">Eye Care Clinic</small>

        </div>

        <div class="col-md-12 text-right hidden-print">
                               
                                <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                                 <hr>
                                
                        </div>

        

              <div class="body table-responsive">
                        <table id="paymentTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>Date and time</th>
                                    <th>Amount Paid</th>
                                    
                                </tr>
                            </thead>
                            <?php 
            $sqllogin="SELECT o.Timestamp,o.TotalAmount,p.PatientName,p.MobileNo FROM tbl_order o, patient p where o.PatientID=p.PatientID;";
                                  
               if ($result = $con->query($sqllogin)) {    
                 while ($row = $result->fetch_object()) { 

        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row->PatientName; ?></td>
                                    <td><?php echo $row->MobileNo; ?></td>
                                    <td><?php echo $row->Timestamp; ?></td>
                                    <td><?php echo $row->TotalAmount; ?></td>
                                    
                                </tr>
                                </tbody>
         <?php           
                              }
                         $result->close();
                            }

          ?>
                            
                        </table>
                    </div>
                    <br><br><br>
       
    </div>
</section>



<?php include 'footer.php'; ?>

<script>
  $(document).ready(function() {

    $('#paymentTable').dataTable();

});
</script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>