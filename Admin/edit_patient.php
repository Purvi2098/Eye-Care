<?php 
$db = mysqli_connect("localhost", "root", "", "eyecareclinic");

if(isset($_POST['updatePatient'])){

        $PatientID=$_POST['update_id'];
        $name=$_POST['pname'];
        $email=$_POST['pemail'];
        $phone=$_POST['pphone'];

        $q = "UPDATE `patient` SET PatientName='$name',Email='$email',MobileNo='$phone' WHERE PatientID='$PatientID' ";

        $res=mysqli_query($db,$q);
        if($res == TRUE){
             header("Location: manage_patient.php");

        }
        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
        }


}

?>