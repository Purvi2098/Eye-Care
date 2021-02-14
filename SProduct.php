<?php 

$cname=$_GET['category'];
$category=$_GET['ID'];

include'header.php';
include'conetDB.php';

if(isset($_POST['submit'])){   
   
    $prodid=$_POST['prodid'];
    $Qty=$_POST['Qty'];
    $patid=$_SESSION['patientid'];


    $qty = "SELECT  `Stock` FROM `product` WHERE ProductID='$prodid'";    
   if ($result0 = $con->query($qty)) {    
        while ($row0 = $result0->fetch_assoc()) {  

        if ( $Qty <= $row0['Stock']){
       
         $stk=$row0['Stock']-$Qty;

         $query = "insert into add_to_cart(PatientID,productID,Quantity) values('".$patid."','".$prodid."','".$Qty."')";
    
        $res=mysqli_query($con,$query);
        if($res == TRUE){ 
          $update="UPDATE `product` SET `Stock`='$stk' WHERE ProductID='$prodid' ";
          mysqli_query($con,$update);         
            echo "<div class='alert alert-success'><b>Sucessfully added</b></div>";
        }


        } 
        else{
        echo "<div class='alert alert-danger'><b>Out of Stock</b></div>";
       }




        }//While loop ends
      }//End If condition
      
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Shopping</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- shop -->
<link href="css/shop.css" rel="stylesheet" type="text/css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles"/>
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />


</head>

<body>

<div class="wrapper">
  <section class="shop grid page-section-ptb">
       <center> <h3 class="title-effect"> <?php echo $cname; ?> </h3></center>
       <br><br>
        <div class="container">
            <div class="row">
               <div class="col-lg-10 col-md-10">
               <div class="row" style="padding-left: 150px">


                <?php 
                        $sqllogin="SELECT * FROM `product` where CategoryID='".$category."'";
                          
                         if ($result = $con->query($sqllogin)) {    
                             while ($row = $result->fetch_assoc()) {  
                   ?> 

                <div class="col-lg-4 col-md-4 col-sm-6">
                 <div class="product mb-40">
                     <div class="product-image">
                         <img class="img-fluid" src="Admin/uploads/<?php echo $row['Image']; ?>" width="250" height="250" >
                         <div class="product-overlay">
                           <div class="add-to-cart">

                             <a class="popup portfolio-img" href="Admin/uploads/<?php echo $row['Image']; ?>"><i class="fa fa-arrows-alt"></i></a>
                             
                              <button type="button" class="btn btn-success Add" data-toggle="modal" data-id="<?php echo $row["ProductID"]; ?>" data-cost="<?php echo $row["Cost"]; ?>"  data-target="#myModal">Add to cart</button>
                           </div>
                         </div>
                      </div>
                      <div class="product-des">
                         <div class="product-title">
                           <a><?php echo $row["ProductName"]; ?></a>
                         </div>
                      <div class="product-price">
                            <ins>Rs.<?php echo $row["Cost"]; ?> </ins>
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
            </div>
        </div>
    </section>

<!--=================================
welcome -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4><b>Cart</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
     <form action="" method="POST" autocomplete="off">
      <div class="modal-body">
        <input type="text" hidden="" id="pid" name="prodid" />

        Cost:<input type="text" readonly="" class="form-control" id="CostPerProduct" name="CostPerProduct" />
        Quantity:
        <input type="text"  class="form-control" name="Qty" />
        <br>

        <div class="form-group pull-right">
          <button type="submit" class="btn btn-primary" name="submit">ADD</button> 
        </div>
     
      </div>
  </form>
    </div>

  </div>
</div>



</div>
<?php  include 'footer.php';?>


<script>
    $(".Add").click(function(){
        var cst = $(this).attr('data-cost');
        $("#CostPerProduct").html(cst);
         $("#CostPerProduct").val(cst);

         var id = $(this).attr('data-id');
        $("#pid").html(id);
         $("#pid").val(id);

        $("#myModal").modal("show");
    })
</script>

<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- Style Customizer -->
<script src="js/style-customizer.min.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>



</body>
</html>
