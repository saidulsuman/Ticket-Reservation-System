<?php
$con=mysqli_connect('localhost','root','','bus_ticket') or die ("unable to connect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   

?>