
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>media</title>
	<link rel="stylesheet" type="text/css" href="scss/style.css" media="all" />
</head>
<body>

	


<!--contentSection-->	
		<div class="wrapper"> 
		<div class="row"> 
		<div class="col-12 contentHeight">
			<div class="col-4 contentHeightLeftPayDescription">
				<div class="col-12 LeftPayDescriptionHeader">
					<h3>Your Ticket</h3>
				</div>
				<?php 
				//name of user
						$name=$_POST['name'];
						echo "Your name is ".$name."<br />";
			
						//For booking seat code			
				$ch=$_POST['chekbox'];
				echo "Choosing Seat No :";
				foreach($ch as $var)
				{
					echo " ".$var." "." ";
				}
				//End For booking seat code 
				
				
				//Gender code
				$gender=$_POST['gender'];
				if($gender=="Male"){ 
				echo "Selected Gender :"." ".$gender;
				} 
				else{
					echo "Selected gender :"." ".$gender;
				}
				//EndGender code 
			
			//Phone Number code
			$phoneNumber=$_POST['phoneNumber'];
			echo "<br />"."Mobile :".$phoneNumber."<br />";
			
			//End Phone Number code
			
			//Email code
			$email=$_POST['email'];
			echo "Email :".$email."<br />";
			
			//End Email code
			
			//payment code 
			$payment=$_POST['payment'];
				echo "Payment By :".$payment."<br />";
				
			//End payment code 
			
			//Bus counter code
			$busCounter=$_POST['busCounter'];
			echo "BusCounter :".$busCounter;
			
				?>
			</div>
			
			
		</div>
		</div>
	</div>
	

	

</body>
</html>