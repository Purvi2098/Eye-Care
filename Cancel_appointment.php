<?php 
 $conn=mysqli_connect("localhost","root","","eyecareclinic");

if(isset($_POST['Cancel_appointment'])){

        $id=$_POST['delete_id'];
        $dt=$_POST['date'];
        $tm=$_POST['time'];     

        $date= date("Y-m-d");

        echo $date.$dt;
        
        if($dt == $date){
            
            echo "<h2>'delete from appointment where PatientID='".$id."' AND Date = '".$dt."' AND Time='".$tm."');</h2>";
                    header("Location: appointmentDetail.php");
        }

        else
        {
            echo "<script>alert('Some went wrong try again after some time..');</script>";
                    header("Location: appointmentDetail.php");
        }

        header("Location: appointmentDetail.php");
}
?>