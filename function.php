<?php 
//Reserve Seat

	function passengerInfo(){
		$link=mysqli_connect('localhost','root','','BMS');
	$sql="INSERT INTO tbl_passnger_info (name, gender, phoneNumber, email,payment,busCounter,chekbox)VALUES('$_POST[name]', '$_POST[gender]', '$_POST[phoneNumber]', '$_POST[email]','$_POST[payment]','$_POST[busCounter]','$_POST[chekbox]',)";
	
	if(mysqli_query($link,$sql)){
		 
		$message="Passenger info save successfully";
		return $message;
	}else{
		die('Query problem'.mysqli_error($link));
	}
}





?>