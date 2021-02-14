<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include 'aheader.php';

 function resizeImage($resourcetype, $image_width, $image_height)
           {
             $resizewidth= 250;
             $resizeheight= 250;
             $imageLayer= imagecreatetruecolor($resizewidth, $resizeheight);
             imagecopyresampled($imageLayer, $resourcetype, 0, 0, 0, 0,
              $resizewidth, $resizeheight, $image_width, $image_height);
             return $imageLayer;

            } 

if(isset($_POST['submit'])){

    

        $prodtName=$_POST['pname'];
        $desc=$_POST['pdesc'];
        $stock=$_POST['pstock'];
        $cat=$_POST['pcategory'];
        $cost=$_POST['pcost'];

        $imageProcess=0;
    
    if(is_array($_FILES)){
      
// File upload path


        $fileName= $_FILES["upload_image"]["tmp_name"];
        $sourceproperties= getimagesize($fileName);
        $resizefilename= time();
        $uploadPath="./uploads/";       
        $fileExtension= pathinfo($_FILES['upload_image']['name'],PATHINFO_EXTENSION);
        $uploadImageType= $sourceproperties[2];
        $sourceWidth= $sourceproperties[0];
        $sourceHeight= $sourceproperties[1];

       
        switch ($uploadImageType) {
            case IMAGETYPE_JPEG:
                $resourcetype =imagecreatefromjpeg($fileName);
                $imageLayer=resizeImage($resourcetype,$sourceWidth,$sourceHeight);
                imagejpeg($imageLayer,$uploadPath. "prod_" . $resizefilename ."." . $fileExtension);
                break;

            case IMAGETYPE_GIF:
                $resourcetype =imagecreatefromgif($imgname);
                $imageLayer=resizeImage($resourcetype,$sourceWidth,$sourceHeight);
                imagegif($imageLayer,$uploadPath. "prod_" . $resizefilename ."." . $fileExtension);
                break;

             case IMAGETYPE_PNG:
                $resourcetype =imagecreatefrompng($imgname);
                $imageLayer=resizeImage($resourcetype,$sourceWidth,$sourceHeight);
                imagepng($imageLayer, $uploadPath. "prod_" . $resizefilename ."." . $fileExtension);
                break;
            
            default:
               $imageProcess=0;
                break;
        }

         move_uploaded_file($resizefilename, $uploadPath. $resizefilename. "." . $fileExtension);
         $imageProcess=1;

}

        if($imageProcess == 1){
        $imgname= "prod_".$resizefilename ."." . $fileExtension ;
       
        $q = "INSERT INTO `product`(`ProductName`, `Description`, `Image`, `Stock`, `CategoryID`, `Cost`) VALUES ('$prodtName','$desc','$imgname','$stock','$cat','$cost')";

        $res=mysqli_query($db,$q);
        if($res == TRUE){

            echo "<script>alert('Product Added');</script>";
        }
        
    }
    else{
         echo "<script>alert('NOT Uploaded');</script>";
    }

    $imageProcess = 0;
}


?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Welcome to</h2>
            <small class="text-muted">Eye care clinic</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h3 >Add Product</h3>
                    </div>
                        
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pname" required="" placeholder="Product Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pstock" class="datepicker form-control" required="" placeholder="stock">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 ">
                                <div class="form-group drop-custum">

                                    <select name="pcategory" required="" class="form-control show-tick" >

                    <option value="0" selected="false">---Select Category---</option>       
                    <?php 
                        $sql4="SELECT * FROM `category`";
                          
                         if ($result4 = $db->query($sql4)) {    
                             while ($row4 = $result4->fetch_assoc()) {  
                                ?>
                    
                            <option value=<?php echo $row4["CategoryID"]; ?> ><?php echo $row4["CategoryName"]; ?></option>
                                
                            <?php   }
                         $result4->close();
                            } ?>
                                   </select>
                                </div>
                            </div>
                         
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                            <input type="file" name="upload_image"><br>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pcost" class="form-control" required="" placeholder="Cost">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="pdesc" class="form-control no-resize" placeholder="Description" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input  type="submit" name="submit" class="btn btn-raised g-bg-cyan" value="Submit">
                                <input type="reset" class="btn btn-raised" value="reset">
                            </div>
                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div>

<hr>

<?php

   
    if(isset($_POST['addcat'])){

    $category=$_POST['cname'];
       $ac=" INSERT INTO `category`(`CategoryName`) VALUES ('$category') ";
       $res2=mysqli_query($db,$ac);
        if($res2 == TRUE){            
            echo '<div class="badge-success">Category Added</div>' ;
        }
    }

 ?>


<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h3 >Add Category</h3>
                    </div>
                        
                    <form action="#" method="post" >
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="cname" required="" placeholder="Category Name">
                                    </div>
                                </div>
                            </div>
                        </div>     

                             <div class="col-sm-12">
                                <input  type="submit" name="addcat" class="btn btn-raised g-bg-cyan" value="Add">
                            </div>            
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

    
    <?php include 'footer.php'; ?>
