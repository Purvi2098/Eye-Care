<!-- <html>
<head>
</head>
<body>

<form method="post" action='get_data.php'>
  <p>Enter Your Street name,City state,Country</p>
  <textarea name='address' placeholder='Street name,City state,Country'></textarea>
  <input type="submit" name="submit_address" value="Get Coordinates">
</form>

<form method="post" action='get_data.php'>
  <p>Enter Latitude</p>
  <input type='text' name='latitude' placeholder='Enter Latitude'>
  <p>Enter Longitude</p>
  <input type='text' name='longitude' placeholder='Enter Longitude'>
  <input type="submit" name="submit_coordinates" value="Get Address">
</form>

</body>
</html> -->
<?php
if(isset($_POST['submit_address']))
{
  $address =$_POST['address']; // Google HQ
  $prepAddr = str_replace(' ','+',$address);
  
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  $output= json_decode($geocode);
  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
	
  echo "latitude - ".$latitude;
  echo "longitude - ".$longitude;
}

if(isset($_POST['submit_coordinates']))
{
  $lat=$_POST['latitude'];
  $long=$_POST['longitude'];
	
  $url  = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".$lat.",".$long."&sensor=false";
  $json = @file_get_contents($url);
  $data = json_decode($json);
  $status = $data->status;
  $address = '';
  if($status == "OK")
  {
	echo $address = $data->results[0]->formatted_address;
  }
  else
  {
	echo "No Data Found Try Again";
  }
}
?>