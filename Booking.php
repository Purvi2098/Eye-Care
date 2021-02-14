<?php 
include('header.php'); 

?>

<br>
<br>
<br>
 <?php
 function build_Calendar($month,$year){
    $daysofweek = array('Sunday', 'Monday' ,'Tuesday' ,'Wednesday' ,'Thrusday' , 'Friday' ,'Saturday');
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    $numberDays = date('t',$firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);   
    $monthName= $dateComponents['month'];
    $daysofweek = $dateComponents['wday'];
    $dateToday= date('Y-m-d');
   
    $Calendar="<table class='table table-bordered'>";
    $Calendar.="<center><h1 style='font-size:28px'> $monthName $year </h1>";

   
    $Calendar.= "<a class='btn btn-outline-success' href='?month=".date('m',mktime(0,0,0,$month-1,1,$year))."&year=".date('Y',mktime(0,0,0, $month-1,1,$year))."'>Prev</a>";
 
    $Calendar.= "<a class='btn btn-outline-success' href='?month=".date('m')."&year=".date('Y')."'>Current</a>";
 

    $Calendar.= "<a class='btn btn-outline-success' href='?month=".date('m',mktime(0,0,0,$month+1,1,$year))."&year=".date('Y',mktime(0,0,0,$month+1,1,$year))."'>Next</a><br></center>";



    $Calendar.="<br><hr><tr>";
    $week= array('Sunday', 'Monday' ,'Tuesday' ,'Wednesday' ,'Thrusday' , 'Friday' ,'Saturday');
    foreach($week as $day) {
        $Calendar .= "<th class='popover-header'>$day</th>";
           }
    
 

    $currentDay=1;
    $Calendar.="</tr><tr>";
    
    if($daysofweek > 0){
       for($k=0; $k<$daysofweek; $k++){
            $Calendar.="<td>&nbsp;</td>";
        }
        
    }  

    $month=str_pad($month,2,"0", STR_PAD_LEFT);
    while ($currentDay <= $numberDays) {
        if($daysofweek == 7){
            $daysofweek=0;
            $Calendar.="</tr><tr>";
        }
        $currentDayRel =str_pad($currentDay,2,"0", STR_PAD_LEFT);
        $date="$year-$month-$currentDayRel";
      
      $today=$date==date('Y-m-d')?"today":"";
      if($date<date('Y-m-d')){
        $Calendar.="<td><h4>$currentDay</h4><button class='btn btn-outline-danger' type='submit' onclick='return nafun();'> N/A</button>";
      }else{

      $Calendar.="<td class='$today'><h4>$currentDay</h4><a href='timeslot.php?date=".$date."' class='btn btn-success' >Book</a>";
         
      }


       /* $Calendar.="<td><h4>$currentDay</h4>";
       
        if($dateToday==$date){
             $Calendar.="<td class='today'><h4>$currentDay</h4>";
        }
        else{
             $Calendar.="<td><h4>$currentDay</h4>";
        }
       */

        $Calendar.="</td>";
        $currentDay++;
        $daysofweek++;
    }
    if($daysofweek != 7){
        $remainingDays= 7-$daysofweek;
        for ($i=0; $i < $remainingDays ; $i++) { 
        $Calendar.="<td></td>";
        }
    }
    $Calendar.="</tr>";
    $Calendar.="</table>";
    echo $Calendar;
}

?>
<script>
    function nafun(){
    alert('Past dates booking are not allowed');
}
</script>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> 

    <style>
        table{
            table-layout: fixed;
           
               /* background-color: #8AD317;            
            padding: 25px;
            text-align: center;*/
        }
        td{
            width: 33%;
        }
        .today{
            background:#8AD317 ;
        }
    </style>
</head>
<body>
    
<center>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php 

                $dateComponents=getdate();
                $month=$dateComponents['mon'];
                $year=$dateComponents['year'];

                echo build_Calendar($month,$year);
             ?>

        </div>
    </div>     
</div>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html> 

 