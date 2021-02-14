<?php 

$con=mysqli_connect("localhost","root","","eyecareclinic");
include('aheader.php');

?>
               
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Product</h2>
            <small class="text-muted">Eye Care Clinic</small>
        </div>
        <div class="row clearfix">

              <?php 
                        $sqllogin="SELECT * FROM `product`";
                          
                         if ($result = $con->query($sqllogin)) {    
                             while ($row = $result->fetch_assoc()) {  
                   ?> 
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">  

                         <div class="thumb-xl member-thumb">
                                <img src="uploads/<?php echo $row['Image']; ?>" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>      

                            <div class="alert-light">
                                <h4 class="m-b-5 m-t-20"><?php echo $row["ProductName"]; ?></h4>
                                <p class="text-muted"><span><a href="" class="text-pink"><b>Description :</b> <?php echo $row["Description"]; ?></a> </span></p>

                                
                            </div>
                            
                             <p class="text-muted"><span> <a href="" class="text-dark"><b>Stock:  </b><?php echo $row["Stock"]; ?></a> </span></p>

                             <p class="text-muted"><span> <a href="" class="text-dark"><b>Cost per Product:  </b><?php echo $row["Cost"]; ?></a> </span></p>
        
                        </div>
                    </div>
                </div>
            </div>
              <?php           
                              }
                         $result->close();
                            }

             ?>

        </div>
       
    </div>
</section>
<?php include 'footer.php'; ?>

  



