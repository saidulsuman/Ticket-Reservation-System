<?php
  session_start();
  $_SESSION["bus"] = "index";
  $con=mysqli_connect('localhost','root','','bus_ticket') or die ("unable to connect");
    
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Durontu.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>

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
				          
				         <div class="logo"> <a class="navbar-brand" href="contact.html"><img src="images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				           <li> <a href="index.php">Home</a></li>
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
           </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->
   
	<pub>
<font face="Impact" font size="7" color="white">Bus Ticket</font></a>
</pub> 
<form action="bus1.php" method="post">

<div class="transbox">
<style>
.transbox{
position:absolute;
top:205px;
left:400px;
width:570px;
height:280px;
border-radius:15px;
}

pub{

text-align:center;	

background-color: sky;

position:absolute;
	height: 60px;
	width: 480px;
        top:150px;
       left:430px;
}
	.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-toggle a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown:hover .dropdown-menu {
    background-color: #3e8e41;
}
.big-arrow{
background-color:red;}
body  {
 background: url("images/bgb.jpg")no-repeat;
 display: block;

  
	
   
}
</style><br>
<p>&nbsp &nbsp &nbsp &nbsp

<font face="Franklin Gothic" font size="6" color=" Floralwhite">Depart From&#160;&#160; &#160;:&#160;</font>
 <select name="select" required>
  <option value="" disabled="disabled" selected="selected">Select Depart From</option>
<option value="ABDULLAHPUR ">Uttara</option>
<option value="AGARTALA">AGARTALA</option>
<option value="GABTOLI">GABTOLI</option>
<option value="CHITTAGONG">CHITTAGONG</option>
<option value="COX'SBAZAR">COX'SBAZAR</option>
<option value="BOGRA">BOGRA</option>
<option value="NAOGAON">NAOGAON</option>
<option value="DINAJPUR">DINAJPUR</option>
<option value="AKKELPUR">AKKELPUR</option>
<option value="BANDARBAN">BANDARBAN</option>
<option value="SYLHET ">SYLHET</option>

</select>
</p>
<br>

<p>&nbsp &nbsp &nbsp &nbsp
<font face="Franklin Gothic" font size="6" color="Floralwhite">Destination&#160;&#160;&#160;&#160; &#160;:&#160;</font>
<select name="select" required>
  <option value="" disabled="disabled" selected="selected">Select Destination</option>
<option value="BOGRA">Bogora</option>
<option value="NAOGAON">NAOGAON</option>
<option value="AKKELPUR">AKKELPUR</option>
<option value="ABDULLAHPUR">Uttara</option>
<option value="GABTOLI">GABTOLI</option>
<option value="CHITTAGONG">CHITTAGONG</option>
<option value="COX'SBAZAR">COX'SBAZAR</option>
<option value="RANGPUR">RANGPUR</option>
<option value="SYLHET">SYLHET</option>
<option value="BANDARBAN">BANDARBAN</option>
<option value="	DINAJPUR">DINAJPUR</option>




</select>
</p>


<br>
<p>&nbsp &nbsp &nbsp &nbsp
<font face="Franklin Gothic" font size="6" color="Floralwhite">Date&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;:&#160;</font>

  
<input type="date" name="dep_date">
</p></center>

<br>
<p>&nbsp &nbsp &nbsp &nbsp
<font face="Franklin Gothic" font size="6" color="Floralwhite	">Coach Type&#160;&#160;&#160;&#160;&#160; &#160;:&#160;</font>
<select name="select" required>
  <option value="" disabled="disabled" selected="selected">Select Coach Type</option>
<option value="#">Ac</option>
<option value="#">Non-Ac</option>
</select>
</p>
<br><br>
<p><center>
 
<input type="submit" value="submit"><br><br><br>
</div>
</form>
</p></center>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<marquee behavior="alternate" id="mov"><font face='Cursive' font size='4' color='blue'>You can book Bus Tickets on our Website upto 30 days in advance.......</font></marquee>
 <br><br>  <!-- End Main Content -->
	   
  <!-- Start Footer -->
  <span class="footer-arrow"></span>
       <div class="footer">	  
       	 <div class="wrap">	      
		  <div class="bank icon">
			   <p>Pay with</p>
			    <ul>
			 			<a href="#"><img src="images/visa.png" alt="visa Logo" width="35" height="30" img class="img-circle"></a>  
						<a href="#"><img src="images/dbbl.jpg" alt="dbbl Logo" width="35" height="30" img class="img-circle"></a>  
						<a href="#"><img src="images/bkash.jpg" alt="bkash Logo" width="35" height="30" img class="img-circle"></a>  
						<a href="#"><img src="images/ibank.jpg" alt="ibank Logo" width="35" height="30" img class="img-circle"></a>  
			 		</ul>
			  </div>
			 </div> </div>
			
		  
			 <div class="footer-bottom">
			 	<div class="wrap">
			 	<div class="copy-right">
			 		<p> Bus booking Copyright &copy; 2018-2019  all right reserved. </p>
			 	</div>
			 	<div class="social-icons">
			 		<ul>
			 			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			 			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			 			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			 			<li><a href="#"><i class="fa fa-rss"></i></a></li>
			 			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			 		</ul>
			 	</div>
			 	<div class="clear"></div>
			 </div>
	       </div>
  <!-- End Footer -->
  </body>
</html>

    	
    	
            