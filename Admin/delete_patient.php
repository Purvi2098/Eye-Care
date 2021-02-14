<?php 
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");

if(isset($_POST['delete_patient'])){

        $id=$_POST['delete_id'];
       
        $q = "delete from patient where PatientID='".$id."'";

        $q_row=mysqli_query($db,$q);
        if($q_row){
            
            echo "<script>alert('Sucessfull..');</script>";
            header("Location: manage_patient.php");
        }
        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
        }


}

?>