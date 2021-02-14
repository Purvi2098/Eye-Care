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
                <ul>
                        <li style="width: 200px;display: inline-block;vertical-align: top;">
                <div class="card">
                     

                    <div class="body">
                       
                        <div class="member-card verified">  

                         <div class="thumb-xl member-thumb">
                                <img src="uploads/<?php echo $row['Image']; ?>" alt="" style=" height: 150px; width: 150px;">                               
                            </div>      

                            <div class="alert-light">
                                <h6 class="m-b-5 m-t-20" style="color: blue;"><?php echo $row["ProductName"]; ?></h6>
                                
                                <p class="text-muted"><span><b style="color: blue;">Description :</b> <?php echo $row["Description"]; ?></span></p>

                                
                            </div>
                            
                             <p class="text-muted"><span> <a href="" class="text-dark"><b style="color: blue;">Stock:  </b><?php echo $row["Stock"]; ?></a> </span></p>

                             <p class="text-muted"><span> <a href="" class="text-dark"><b style="color: blue;">Cost per Product:  </b><?php echo $row["Cost"]; ?></a> </span></p>
        
                        </div>
                    

                    </div>

                </div>
</li>
            </ul>
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

  



