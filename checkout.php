<a href="shopping.php" ><input type="button" class="button" name="Continue" value="Go back" /> </a>

<?php
session_start();
include'conetDB.php';
$t="0";
$cartArray=" ";

$id=$_SESSION['patientid'];

 

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
<title>Checkout </title>

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

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-18.gif" alt="">
</div>

<!--=================================
 preloader -->



<!--=================================
shop -->

  <section class="wishlist-page page-section-ptb">
    <div class="container">      
      <div class="row">
          <div class="col-lg-12 col-md-12">
           <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Cost</th>
                      <th>Quantity </th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php  


                  $sSQl="SELECT p.ProductName,p.ProductID,p.Image,p.Cost,a.ProductID,a.Quantity FROM add_to_cart a,product p WHERE a.ProductID=p.ProductID AND a.PatientID='".$id."'";
                   if ($result = $con->query($sSQl)) {    
                       while ($row = $result->fetch_assoc()) { 
                        $cost= $row['Cost'];
                        $Quantity=$row['Quantity'];
                        $sum=$cost * $Quantity;
                        
                        $t+=$sum;
                        $cartArray.=$row['ProductName'].",";
                     ?>
                   <tr>
                     <td class="image">
                         <a class="media-link"> <img class="img-fluid" src="Admin/uploads/<?php echo $row['Image']; ?>" alt=""/></a>
                        </td>
                         <td class="description">
                          <a href="#"><?php echo $row['ProductName'] ?></a>
                         </td>
                          <td class="price">Rs.<?php echo $row['Cost'] ?></td>
                          <td class="td-quentety">
                              <input type="number" value=<?php echo $row['Quantity'] ?> >
                            </td>
                           
                           <td class="price price-2"><?php echo $sum ?></td>
                          
                      </tr>

                      <?php  
                  
              }
              $_SESSION['Product']=$cartArray;
                    } 

                    ?>
                      
                  </tbody>
             </table>
         </div>
       </div>
      </div>
    
      <div class="row mt-60">
        <div class="col-md-8 float-right sm-mt-30">
          <table class="table table-dark text-right">
                  <tbody>
                  <tr class="total">
                    <td><b>Grand Total </b></td>
                    <td><b><?php $_SESSION['amount']=$t; ?>Rs.&nbsp; <?php echo $t; ?> </b></td>
                  </tr>
                  <tr class="total">
                  </tr>
                </tbody>
              </table>
        </div>      
      </div>
      <br><br>
      <div class="total">
        <form action="#" method="POST">
        Your Payment Mode is :
        <select class="form-control" name="modep">
          <option>Online</option>
          <option>Offline</option>
        </select>
        <br>

        <a href="Payumoney/index.php" ><input type="button" class="button" name="Continue" value="Continue" /> </a>
          </form>
      </div>
    </div>
 </section>
 </div>


<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- plugins-jquery -->
<script type="text/javascript" src="js/slick/slick.min.js"></script>

<!-- Style Customizer -->
<script src="js/style-customizer.min.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>



</body>
</html>

