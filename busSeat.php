<?php
session_start();
	
	require_once('db.php');




?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Durontu.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />

        <style type="text/css">
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
            label.seat{
                color: red  ;

                position: relative;
                left: 180px;

            }


            input[type="checkbox"]{
                display: none;
                border: none !important;
                box-shadow: none !important;

            }

            input[type="checkbox"] + label span {   
                background: url("images/uncheck.png");
                width: 30px;
                height:30px;


                display: inline-block;

            }

            input[type="checkbox"]:disabled + label span {
                background: url("images/booked.png");
                width: 30px;
                height: 30px;
                display: inline-block;

            }

            input[type="checkbox"]:checked + label span {
                background: url("images/check.png");
                width: 30px;
                height: 30px;
                display: inline-block;

            }
            body  {
                background: url("images/bticket.jpg");
                display: block;



            }
            .margin{
                display: inline-block;
                margin-bottom: 100px;
                margin-right: 150px;
                margin-left: 80px;
            }


        </style>
        <script type="text/javascript">
            function goToNewPage()
            {
                var url = document.getElementById('list').value;
                if (url != 'none') {
                    window.location = url;
                }
            }
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
                                <li><a href="index.php">Home</a></li>
                                  <li><a href="book.php">Bus</a></li>
                             
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




        <br>

        <div id="iform">
            <div class="margin">

                <br><center>
                    <font face="Impact" font size="7" color="black">Choose your seats</font></a>
                </center>

                <br> 
                <div class="border">

                    <br>

                    <br><br><br>
                    <div>

                        <!---row1-->

<form method="POST" "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                        <table>

                            <tr>


                            <div>



                                <td><input type="checkbox" id="A1" name="seats[]" value="A1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="A1" class="seat"><span></span>A1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="A2" name="seats[]" value="A2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="A2" class="seat"><span></span>A2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>




                            </div>


                            <div>

                                <td><input type="checkbox" id="A3" name="seats[]" value="A3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="A3" class="seat"><span></span>A3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="A4" name="seats[]" value="A4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="A4" class="seat"><span></span>A4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>





                            <!---Row 2--->



                            <tr>
                            <div>
                                <td><input type="checkbox" id="B1" name="seats[]" value="B1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="B1" class="seat"><span></span>B1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="B2" name="seats[]" value="B2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="B2" class="seat"><span></span>B2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>

                            <div>
                                <td><input type="checkbox" id="B3" name="seats[]" value="B3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="B3" class="seat"><span></span>B3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="B4" name="seats[]" value="B4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="B4" class="seat"><span></span>B4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>



                            <!---row 3--->


                            <tr>
                            <div>
                                <td><input type="checkbox" id="C1" name="seats[]" value="C1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="C1" class="seat"><span></span>C1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="C2" name="seats[]" value="C2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="C2" class="seat"><span></span>C2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="C3" name="seats[]" value="C3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="C3" class="seat"><span></span>C3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="C4" name="seats[]" value="C4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="C4" class="seat"><span></span>C4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>




                            <!---row 4--->

                            <tr>
                            <div>

                                <td><input type="checkbox" id="D1" name="seats[]" value="D1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="D1" class="seat"><span></span>D1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="D2" name="seats[]" value="D2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="D2" class="seat"><span></span>D2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="D3" name="seats[]" value="D3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="D3" class="seat"><span></span>D3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="D4" name="seats[]" value="D4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="D4" class="seat"><span></span>D4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>




                            <!---row 5--->

                            <tr>
                            <div>
                                <td><input type="checkbox" id="E1" name="seats[]" value="E1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="E1" class="seat"><span></span>E1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="E2" name="seats[]" value="E2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="E2" class="seat"><span></span>E2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="E3" name="seats[]" value="E3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="E3" class="seat"><span></span>E3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="E4" name="seats[]" value="E4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="E4" class="seat"><span></span>E4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>



                            <!---row 6--->




                            <tr>
                            <div>
                                <td><input type="checkbox" id="F1" name="seats[]" value="F1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="F1" class="seat"><span></span>F1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="F2" name="seats[]" value="F2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="F2" class="seat"><span></span>F2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>



                            <div>

                                <td><input type="checkbox" id="F3" name="seats[]" value="F3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="F3" class="seat"><span></span>F3</label></td><td> &nbsp; </td> 
                                <td><input type="checkbox" id="F4" name="seats[]" value="F4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="F4" class="seat"><span></span>F4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>




                            <!---row 7--->







                            <tr>
                            <div>
                                <td><input type="checkbox" id="G1" name="seats[]" value="G1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="G1" class="seat"><span></span>G1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="G2" name="seats[]" value="G2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="G2" class="seat"><span></span>G2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="G3" name="seats[]" value="G3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="G3" class="seat"><span></span>G3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="G4" name="seats[]" value="G4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="G4" class="seat"><span></span>G4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>


                            <!---row 8--->



                            <tr>
                            <div>
                                <td><input type="checkbox" id="H1" name="seats[]" value="H1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="H1" class="seat"><span></span>H1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="H2" name="seats[]" value="H2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="H2" class="seat"><span></span>H2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="H3" name="seats[]" value="H3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="H3" class="seat"><span></span>H3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="H4" name="seats[]" value="H4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="H4" class="seat"><span></span>H4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>





                            <!---row 9--->


                            <tr>
                            <div>
                                <td><input type="checkbox" id="I1" name="seats[]" value="I1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="I1" class="seat"><span></span>I1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="I2" name="seats[]" value="I2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="I2" class="seat"><span></span>I2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="I3" name="seats[]" value="I3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="I3" class="seat"><span></span>I3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="I4" name="seats[]" value="I4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="I4" class="seat"><span></span>I4</label></td>
                                <td>&nbsp;</td>
                            </div>
                            </tr>


                            <!---row 10--->


                            <tr>
                            <div>
                                <td><input type="checkbox" id="J1" name="seats[]" value="J1" onchange="document.getElementById('checkBtn').disabled = !this.checked;" style="height: 200px; width:200px;" /><label for="J1" class="seat"><span></span>J1</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="J2" name="seats[]" value="J2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="J2" class="seat"><span></span>J2</label></td>
                                <td> &nbsp; </td> <td> &nbsp; </td><td> &nbsp; </td> <td> &nbsp; </td><td>&nbsp;</td>
                            </div>
                            <div>
                                <td><input type="checkbox" id="J3" name="seats[]" value="J3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="J3" class="seat"><span></span>J3</label></td><td> &nbsp; </td>
                                <td><input type="checkbox" id="J4" name="seats[]" value="J4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"  /><label for="J4" class="seat"><span></span>J4</label></td>
                                <td>&nbsp;</td>

                            </div>
                            </tr>

                        </table>



                        <!---row 11--->

                    </div>
                </div>

				
				<!---seat information--->
				
                <style>
                    .information{
                        position: absolute;
                        top: 15%;
                        left: 50%;}
                    .submit{
                        position: absolute;
                        top: 101%;
                        left: 90%;}
                    .src{
                        background-color:green;}
                    .bottom{
                        position: absolute;
                        top: 101%;
                        left: 35%;}
                    .border{

                        margin-left:100px;

                        margin-top :8px;
                        width: 950px;
                        height:560px;
                        border: 2px solid black;
                    }

                </style>
                <div class="information"> 
                    <pub>
                        <br><br><br>

                    </pub> 
                    <br> 
                    <br><br><br><br><br><br>
                    <table>
                        <tr>
                            <th><img src="images/uncheck.png"width="30px" height="30px" /></th>
                            <th><img src="images/check.png" width="30px" height="30px" /></th>
                            <th><img src="images/booked.png" width="30px" height="30px" /></th>
                        </tr>
                        <tr>
                        <br>
                        <td style="color: black">Available &nbsp;</td>
                        <td style="color: black">Selected &nbsp;</td>
                        <td style="color: black">Booked &nbsp;</td>
                        </tr>
                    </table>

                    <br>  
                    <table border="1" height="100%" width="100%">

						<td>seat</td>
                            <td>Class</td>
                            <td>Fare</td>
                        </tr>


						<!---seat form information--->
						
						
						
						
                        <tr > 
                        <table>
						<div>
                            <tr>
                                <th>Full Name:<br>   <br></th>
                                <td><input type="text" id="fname" name="fname" pattern=".{3,25}" title="3-15 characters" size="31" placeholder="write full name, Maximum(15 Char)" required></td>
                            </tr>
						</div>
							
						<div>
                            <tr>
                                <th>Gender: <br>  <br></th>
                                <td><input type="radio" id="gender" name="gender" value="Male" checked="checked"> Male<input type="radio" id="gender" name="gender" value="Female"> Female<input type="radio" id="gender" name="gender" value="Other"> Other
                                </td>
                            </tr>
						</div>
						
						<div>
                            <tr>
                                <th>Email: <br>  <br></th>
                                <td><input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="Enter a valid email" title="Input valid email,please!" size="31" /></td>
                            </tr>
						</div>
						
						<div>
                            <tr>
                                <th>Phone: <br>  <br></th>
                                <td><input type="text" id="phone" name="phone" size="31" pattern=".{11,16}" title="valid phone number" placeholder="01XXXXXXXXX" required></td>
                            </tr>
						</div>
						
						
                            <tr>
                                <th>Payment By: <br>  <br></th> 
                                <td>

                                    <form>

                                        <select name="list"id="list" required>
                                            <option value="" disabled="disabled" selected="selected">Select PaymentGetway</option>
                                            <option value="busFare.php">Bkash</option>
                                            <option value="dbbl.html">DBBL</option> 
                                            <option value="M-Cash">M-Cash</option>
                                        </select>
                                </td>
                            </tr>
						
						
                            <tr>
                                <th>Bus Counter <br>  <br></th> 
                                <td>
                                    <select name="select" required>
                                        <option value="" disabled="disabled" selected="selected">Select Counter</option>
                                        <option value="#">Mohakhali</option>
                                        <option value="#">Gabtoli</option>
                                        <option value="#">Abdullahpur</option>
                                    </select>
                                </td>
                            </tr>
							
						
							<br>
                            <br>
                            <div class="bottom">
                                <input type=button value="Submit" onclick="goToNewPage()" />

                                </form>
                        </table>


                    </table>
                </div>

            </div>


            <br><br>  
            <br><br>  
            <br><br>

        </div>
    </div>
	
	
	
    <!-- Start Footer -->
	
	
	
	

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

	
	
	
</header>
</body>