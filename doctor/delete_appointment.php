<?php 
 $conn=mysqli_connect("localhost","root","","eyecareclinic");

if(isset($_POST['Cancel_appointment'])){

        $id=$_POST['delete_id'];
        $dt=$_POST['date'];
        $tm=$_POST['time'];       
        $q = "update appointment set status='1' where PatientID='".$id."' AND Date = '".$dt."' AND Time='".$tm."'";

        $q_row=mysqli_query($conn,$q);
        if($q_row){
            
            echo "<script>alert('Sucessfull..');</script>";
            header("Location: bappointment.php");
        }
        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
        }

}
?>