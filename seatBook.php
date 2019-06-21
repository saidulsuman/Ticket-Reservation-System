<?php 
$message='';
include 'function.php';
if(isset($_POST['btn'])){
		$message=passengerInfo();
		
	}

?>




<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>media</title>
        <link rel="stylesheet" type="text/css" href="scss/style.css" media="all" />
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
<style>
 

       
			</style>

        <!--contentSection-->	
        <div class="wrapper"> 
            <div class="row"> 
                <div class="col-12 contentHeight">
                    <div class="col-4 contentHeightLeftPayDescription">
                        <div class="col-12 LeftPayDescriptionHeader">
                            <h3>Choose your seat</h3>
                        </div>
                        <div class="col-12 LeftPayDescriptionContent">
                            <h3>front </h3> 
                            <form action="reserveSeat.php" method="post">
                                <table border="1" height="auto" width="100%">
                                    <tr> 
                                        <td>A</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="A1" /> <label for="A1" class="seat"><span></span>A1</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="A2" /> <label for="A2" class="seat"><span></span>A2</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="A3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="A4" /><label for="A4" class="seat"><span></span>A4</label>
                                        </td>
                                    </tr>
									 <tr> 
                                        <td>B</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="B1" /> <label for="B1" class="seat"><span></span>B1</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="B2" /> <label for="B2" class="seat"><span></span>B2</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="B3" /> <label for="B3" class="seat"><span></span>B3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="B4" /><label for="B4" class="seat"><span></span>B4</label>
                                        </td>
                                    </tr>
					                     <tr> 
                                        <td>C</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="C1" /> <label for="C1" class="seat"><span></span>C1</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="C2" /> <label for="C2" class="seat"><span></span>C2</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="C3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="C4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr> 
									
							                     <tr> 
                                        <td>D</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="D1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="D2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="D3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="D4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr> 
					                     <tr> 
                                        <td>E</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="E1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="E2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="E3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="E4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr> 
					                     <tr> 
                                        <td>F</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="F1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="F2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="F3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="F4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr>
			                     <tr> 
                                        <td>G</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="G1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="G2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="G3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="G4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr>
									
							                     <tr> 
                                        <td>H</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="H1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="H2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="H3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="H4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr>
                                                     <tr> 
                                        <td>I</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="I1" /> <label for="A3" class="seat"><span></span>A3</label>
										<input type="checkbox" class="btn" name="chekbox[]" value="I2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="I3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="I4" /> <label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr> 
									
								                     <tr> 
                                        <td>J</td>
                                        <td > 
										<input type="checkbox" class="btn" name="chekbox[]" value="J1" /> <label for="A3" class="seat"><span></span>A3</label> 
										<input type="checkbox" class="btn" name="chekbox[]" value="J2" /> <label for="A3" class="seat"><span></span>A3</label>
										</td>


                                        <td>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="J3" /> <label for="A3" class="seat"><span></span>A3</label>
                                            <input type="checkbox" class="btn " name="chekbox[]" value="J4" /><label for="A3" class="seat"><span></span>A3</label>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    <div class="col-6 contentHeightRightSubForm">
                        <div class="col-12 RightRightSubFormHeader">
                            <h3>Passenger Information</h3>

                        </div>
                        <div class="col-12 RightRightSubFormContent">
                            <ul> 
                                <li>Available Seats <input type="button" class="available"/> </li>
                                <li>Select Seats <input type="button" class="select"/> </li>
                                <li>Sold Seats <input type="button" class="sold"/> </li>
                            </ul>


                            <br />
                            <table border="1" height="auto" width="100%">
                                <tr class="tdOptionClass"> 
                                    <td>Seats</td>
                                    <td>Class</td>
                                    <td>Fare</td>
                                </tr>


                                <table border="none" style="margin-left:10px;margin-top:10px;"> 

                                    <tr> 
                                        <td>Name</td>
                                        <td><input type="text" name="name"  placeholder="With full Name, Max 15 Charecter"  class="inputGroup"/></td>
                                    </tr>
                                    <tr> 
                                        <td colspan="2">Gender <br />
                                            <input type="radio" name="gender" value="Male" placeholder="Male" /> Male
                                            <input type="radio" name="gender" value="Female" placeholder="Female" />	Female
                                        </td>
                                    </tr> 

                                    <tr> 
                                        <td>Mobile</td>
                                        <td><input type="text" name="phoneNumber" value="" placeholder="01XXXXXXXX"  class="inputGroup"/></td>
                                    </tr>
                                    <tr> 
                                        <td>Email</td>
                                        <td><input type="text" name="email" value="" placeholder="Enter a valid Email"  class="inputGroup"/></td>
                                    </tr>
                                    <tr> 
                                        <td colspan="2">Payment By<br /> 
                                            <select name="payment">
                                                <option>DBBL</option>
                                                <option>Bkash</option>
                                                <option>M-Cash</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td colspan="2">Bus Counter <br /> 
                                            <select name="busCounter">
                                                <option>Mohakhali</option>
                                                <option>Gabtoli</option>
                                                <option>Abdullahpur</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr> 
                                        <td colspan="2"><button type="submit" name="btn">Save</button></td>
                                    </tr>
                                </table>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>




    </body>
</html>