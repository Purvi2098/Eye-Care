<?php 
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");

if(isset($_POST['delete_product'])){

        $id=$_POST['delete_id'];
       
        $q = "delete from product where ProductID='".$id."'";

        $q_row=mysqli_query($db,$q);
        if($q_row){
            
            header("Location: manage_product.php");
        }
        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
        }


}

?>