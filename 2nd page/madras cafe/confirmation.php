<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cofirmaion Page</title>

</head>
<body style="background-color: #EFEFEF;">


	<h1 style="font-size: 2cm; text-align: center; background-color: orangered; color:white; font-family: helvetica;">Shahi Darbar</h1>

	<h1 style="text-align: center; font-size: 0.75cm; background-color: #CAEBF2; font-family: helvetica;color">
	Customer:
	<?php echo $_POST['firstname']; ?><br></h1>
	<p style="font-size: 0.5cm; font-family: helvetica;">Your Order Worth : 1009</p>
	<p style="font-size: 0.5cm; font-family: helvetica;">Through Card: <?php echo $_POST['cardname']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">Card Number: <?php echo $_POST['cardnumber']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">Email: <?php echo $_POST['email']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">Address: <?php echo $_POST['address']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">City: <?php echo $_POST['city']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">Pincode: <?php echo $_POST['PINCODE']; ?><br></p>
	<p style="font-size: 0.5cm; font-family: helvetica">State: <?php echo $_POST['state']; ?><br></p>

	<?php
	$flag = 0;
	if (empty ($_POST["firstname"])){
		$flag = 1;
	} 
	$name = $_POST ["firstname"];  

	if (!preg_match ("/^[a-zA-z]*$/", $name) ){
		$flag = 1;
	}
	$mobileno = $_POST ["cardnumber"];  

	if (!preg_match ("/^[0-9]*$/", $mobileno) ){
		$flag = 1;
	}  
	$email = $_POST ["email"];  
	$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
	if (!preg_match ($pattern, $email) ){
		$flag = 1;
	}  
	$lenght = strlen ($_POST ["cardnumber"]);  
	
  
	if ( $lenght < 12){
		$flag = 1;
	}
	$len = strlen ($_POST ["cardnumber"]); 
	if( $len > 12){
		$flag = 1;
	}

	if($flag == 0){
		echo "<h1>Order Successfull</h1>";
	}
	if($flag == 1){
		echo "<h1>Order Unsuccessfull</h1>";
	}

	?>
	
	

</body>
</html>