
<?php
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");

if(isset($_POST['updateProduct'])){

        $ProductID=$_POST['update_id'];
        $name=$_POST['pname'];
        $desc=$_POST['pdesc'];
        $stock=$_POST['pstock'];
        $cost=$_POST['pcost'];

        $q = "UPDATE `product` SET `ProductName`='$name',`Description`='$desc',`Stock`='$stock',`Cost`='$cost' WHERE `ProductID`='$ProductID' ";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
             header("Location: manage_product.php");

        }
        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
        }


}

?>