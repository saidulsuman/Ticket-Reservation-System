
<?php
  session_start();
 
  
  $con=mysqli_connect('localhost','root','','bus_ticket') or die ("unable to connect");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Durontu.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'><!-- google fonts-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- audio video-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<!-- responsive pc,tab,mobile-->
  <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items :4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>
	<!-- navigation  bus dropdown-->
		<style>
		
	.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-toggle a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown:hover .dropdown-menu {
    background-color: #85DAB1;
}




</style>
  
</head>
<body>
   <!-- Start Header -->
       <div class="header">	
   	 	    <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p>Support: +8801751454597</p>
   	 	    	 </div>
				 <div class="header-top-right">
				        <ul>
				
				           <li><a href="admin/login-form.php">ADMIN</a></li>
				         </ul>
				    </div>
				 
			      <div class="clear"></div>
			     </div> 
		      </div>
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				      <div class="container">
				        <div class="navbar-header">
				          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				         <div class="logo"> <a class="navbar-brand" href="contact.html"><img src="images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				           		            <li class="active"><a href="index.php">Home</a></li><!-- index link-->
   					
			<li class="active"> <a href="book.php">Bus</a></li>
		<li><a href="#">Train</a></li>
		<li><a href="#">Airplane</a></li>
			
				            <li><a href="contact.html">Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
	        






<br><br><br>
<?php

$con=mysqli_connect('localhost','root','','bus_ticket') or die ("unable to connect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="UPDATE route  SET avalseats = maxseats-(select count(rid) from 
reserves where rid=route.rid and status='booked' )   ";



	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}

$sql="DELETE FROM  today";
if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}
$sql="INSERT INTO  today (tod_time,tod_date) VALUES (CURRENT_TIME,CURRENT_DATE);  ";
if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}

$sql = "SELECT * FROM today";
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$row=mysqli_fetch_array($retval);

$curr_date=$row['tod_date'];

$curr_time=$row['tod_time'];

$from='';
$to='';
$date='';





if (isset($_POST['fromLoc']))
{
$from=$_POST['fromLoc'];

}

if (isset($_POST['toLoc']))
{
$to=$_POST['toLoc'];
}

if (isset($_POST['dep_date']))
{
$date=$_POST['dep_date'];
}


if ( $date !=  '' && $from != $to  && $date > $curr_date  )
{

$count=0;
$sql="select *from bus,route where route.bid=bus.bid  and route.fromLoc='$from ' and route.toLoc= '$to' and route.dep_date='$date ' ";


$retval=mysqli_query($con,$sql);

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$row=mysqli_fetch_array($retval);
if ($row['rid'] != '' )
{	

echo"  <pub><center>
<font face='Cursive' font size='5' color='yellow'>Available Buses</font></a>
</pub></center><center>
<font face='Gunplay' font size='4' color='Black'><br> <br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
For<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 $from To $to  
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
on 
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;
&#160;&#160;&#160;
 $date </font><br> ";





echo "<table border='3' style='border-color: green; cellspacing='8' cellpadding='8'>
<tr>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Route_id' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Bus' ></form>
</th>

<th border='2'>
<form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Dep_Time' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Arr_Time' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Arr_date' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='AC' ></form>
</th>
</center><center>
<th border='2'>
<form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Sleeper' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Fare(&#8377;)' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Available' ></form>
</th></center>

<th border='2'>Select
</th>


</tr border='2'>";

$count=0;
$sql="select *from bus,route where route.bid=bus.bid  and route.fromLoc='$from ' and route.toLoc= '$to' and route.dep_date='$date ' ";


$retval=mysqli_query($con,$sql);

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
{
	$count=1;





echo "<td border='2'> <center>". $row['rid']."</center></td>";
echo "<td border='2'> <center>". $row['bname']."</center></td>";

echo "<td border='2'><center>" . $row['dep_time']."</center> </td>";

echo "<td border='2'><center>" . $row['arr_time']."</center> </td>";
echo "<td border='2'><center>" . $row['arr_date']."</center> </td>";

echo "<td border='2'> <center>". $row['type_ac']."</center></td>";

echo "<td border='2'><center>". $row['type_sl']."</center></td>";

echo "<td border='2'><center>" . $row['fare']. "</center></td>";

echo "<td border='2'><center>" . $row['avalseats']. "</center></td>";

echo "<td border='2'><center><form action='seatBook.php' method='post'><input type='submit'  name='rid' value=View Sheet". $row['rid']." </center></td>";




echo "</tr border='2'>"; }
echo "</table><p>";
}

else
{
echo "
<pub>
<font face='Cursive' font size='5' color='yellow'>Sorry!  No Buses Available...</font>
</pub><font face='Gunplay' font size='4' color='Black'><br> <br> <br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
For<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;

 $from To $to  
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
on 
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;
&#160;&#160;&#160;
 $date </font><br> 
";

}

}



else if ( $date !=  ''  && $from != $to   && $date == $curr_date)
{

$count=0;
$sql="select *from bus,route where route.bid=bus.bid  and route.fromLoc='$from ' and route.toLoc= '$to' and route.dep_date='$date ' and route.dep_time >  '$curr_time' ";


$retval=mysqli_query($con,$sql);

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$row=mysqli_fetch_array($retval);
if ($row['rid'] != '' )
{	

echo"  <pub>
<font face='Cursive' font size='5' color='yellow'>Available Buses</font></a>
</pub><center>
<font face='Gunplay' font size='4' color='Black'><br> <br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
For<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 $from To $to  
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
on 
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;
&#160;&#160;&#160;</center>
 $date </font><br> ";





echo "<table border='3' style='border-color: green; cellspacing='8' cellpadding='8'>
<tr>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Route_id' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Bus' ></form>
</th>

<th border='2'>
<form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'>
<input type='submit' value='Dep_Time' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Arr_Time' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Arr_date' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='AC' ></form>
</th>

<th border='2'>
<form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Sleeper' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Fare(&#8377;)' ></form>
</th>

<th border='2'><form action='#' method='post'>
<input type='hidden'  name='fromLoc' value='$from'>
<input type='hidden'  name='toLoc' value='$to'>
<input type='hidden'  name='dep_date' value='$date'><input type='submit' value='Available' ></form>
</th>

<th border='2'>Select
</th>


</tr border='2'>";

$count=0;
$sql="select *from bus,route where route.bid=bus.bid  and route.fromLoc='$from ' and route.toLoc= '$to' and route.dep_date='$date ' ";


$retval=mysqli_query($con,$sql);

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
{
	$count=1;





echo "<td border='2'> <center>". $row['rid']."</center></td>";
echo "<td border='2'> <center>". $row['bname']."</center></td>";

echo "<td border='2'><center>" . $row['dep_time']."</center> </td>";

echo "<td border='2'><center>" . $row['arr_time']."</center> </td>";
echo "<td border='2'><center>" . $row['arr_date']."</center> </td>";

echo "<td border='2'> <center>". $row['type_ac']."</center></td>";

echo "<td border='2'><center>". $row['type_sl']."</center></td>";

echo "<td border='2'><center>" . $row['fare']. "</center></td>";

echo "<td border='2'><center>" . $row['avalseats']. "</center></td>";

echo "<td border='2'><center><form action='seatBook.php' method='post'><input type='submit'  name='rid' value='View Seat';". $row['rid']." </center></td>";




echo "</tr border='2'>"; }
echo "</table><p>";
}

else
{
echo "
<pub>
<font face='Cursive' font size='5' color='yellow'>Sorry!  No Buses Available...</font>
</pub><font face='Gunplay' font size='4' color='Black'><br> <br> <br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
For<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;

 $from To $to  
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;
on 
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;
&#160;&#160;&#160;
 $date </font><br> 
";

}

}







else if ( $date !=  ''  && $from == $to  && $date >= $curr_date   )
{
echo "
<puk>
<font face='Cursive' font size='5' color='yellow'>Source and Destination Can't be same...
<br> Please Enter Different Source & destination</font></a>
</puk>


";

}
else if ( $date !=  ''  && $from == $to  && $date < $curr_date   )
{
echo "
<puk>
<font face='Cursive' font size='5' color='yellow'>Source and Destination Can't be same...
<br> Please Enter Different Source & destination</font></a>
</puk>


";


}


else if ( $date !=  ''  && $from != $to  && $date < $curr_date   )
{
echo "
<pud>
<font face='Cursive' font size='5' color='yellow'>Journey Date must be on or after ".$curr_date."</font></a>
</pud>


";


}


else
{
echo "
<pub>
<font face='Cursive' font size='5' color='yellow'>Invalid Date</font></a>
</pub>


";

}
mysqli_close($con);
?>




<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>