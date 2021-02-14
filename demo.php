<?php

$con=mysqli_connect("localhost","root","","optomate");

$restt = mysqli_query($con,"SELECT * FROM test where app_id='10'");
$arrrec = mysqli_fetch_array($restt);


$sph = unserialize($arrrec['sph']);
$cyl  = unserialize($arrrec['cyl']);
$axis  = unserialize($arrrec['axis']);  
?>
        <table width="688" border="0">
            <tr  bgcolor="#FFFFCC">
              <td colspan="4" align="center">Test Results</td>
            </tr>
            <tr>
              <td width="96" bgcolor="#FFFFCC">Test ID:</td>    
              <td width="161"><?php 
       $testid = $arrrec['test_id'];
        echo $arrrec['test_id']; 
        ?></td>
              <td width="114" bgcolor="#FFFFCC">Appointment ID:</td>
              <td width="299"><?php echo $arrrec['app_id']; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td colspan="2" align="center"><strong>Left  Eye </strong></td>
              <td colspan="2" align="center"><strong>Right Eye  </strong></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">SPH: </td>
              <td><?php echo $sph['0']; ?></td>
              <td bgcolor="#FFFFCC">SPH:</td>
              <td><?php echo $sph['1']; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">CYL: </td>
              <td><?php echo $cyl['0']; ?></td>
              <td bgcolor="#FFFFCC">CYL:</td>
              <td><?php echo $cyl['1']; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">Axis:</td>
              <td><?php echo $axis['0']; ?></td>
              <td bgcolor="#FFFFCC">Axis:</td>
              <td><?php echo $axis['1']; ?></td>
            </tr>
            <tr>
              <td height="34" colspan="2" bgcolor="#FFFFCC">Remarks:</td>
              <td colspan="2"><?php echo $arrrec['remarks']; ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FFFFCC">Specs Requirement:</td>
              <td colspan="2"><?php echo $arrrec['specs_req']; ?></td>
            </tr>
        </table>
        <br />
        <table width="689" height="162" border="0">
          <tr bgcolor="#FFFFCC">
            <td colspan="6" align="center">Prescription</td>
          </tr>
       
          <tr bgcolor="#FFFFCC">
            <td width="117">Test ID</td>
            <td width="170">Number Of Days</td>
            <td width="194">Medicine Names</td>
            <td width="69">Mg</td>
            <td width="117">Dosage</td>
          <tr>

              <?php
$respat = mysqli_query($con,"SELECT * FROM appointment where pat_id='2'");
$recpat = mysqli_fetch_array($respat);

$restest = mysqli_query($con,"SELECT * FROM test where app_id='10'");
$rettest = mysqli_fetch_array($restest);

        $res = mysqli_query($con,"SELECT * FROM prescription where test_id='10'");
        
        $retpres = mysqli_fetch_array($res);
        $nod= unserialize($retpres['no_of_days']);
        $medname = unserialize($retpres['medicines']);
        $mg = unserialize($retpres['mg']);
        $dosage = unserialize($retpres['dosage']);
        echo "<td>" . $retpres['test_id'] . "</td>";
        for($k=0; $k<count($nod); $k++)
        {
          for($j=1;$j<=$k;$j++)
          {
            echo "<td>"  .    "</td>";
          }
          echo "<td>" . $nod[$k] . "</td>";
          echo "<td>" . $medname[$k] . "</td>";
          echo "<td>" . $mg[$k] . "</td>";
          echo "<td>" . $dosage[$k] . "</td>";
          echo "</tr>";
        }
  
?>
          <tr><td bgcolor="#FFFFCC">Remarks:</td>
            <td colspan="5"><?php echo $retpres['remarks'];?></td></tr>

</table>