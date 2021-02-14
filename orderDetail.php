<?php
include 'header.php'; 
include 'conetDB.php';
$pname=$_SESSION['PatientName'];
$id=$_SESSION['patientid'];


?>
<br>
<br>

<title>Order Detail</title>


<div style="padding: 30px">
<div class="row mt-50">
      <div class="col-lg-12 col-md-12">
      <h3 class="mb-30">Orders </h3>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Date and Time</th>
            <th>Amount</th>
          </tr>
        </thead>

        <tbody>
        <?php 
        	$sqllogin="SELECT Timestamp,TotalAmount FROM tbl_order where PatientID='".$id."' ";
                          
       if ($result = $con->query($sqllogin)) {    
         while ($row = $result->fetch_object()) { 

        ?>
          <tr>
            <td><?php echo $pname; ?></td>
            <td><?php echo $row->Timestamp; ?></td>
            <td><?php echo $row->TotalAmount; ?></td>
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

<?php include 'footer.php'; ?>