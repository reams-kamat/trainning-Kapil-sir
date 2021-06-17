<?php
	require_once('database.php');
?>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];
	$roll_no = $_POST['roll_no'];
	// var_dump($name, $email, $address, $phone_no, $roll_no); die();

	$sql_query = "INSERT INTO `user`(`name`, `email`, `address`, `phone_no`, `roll_no`) VALUES ('$name','$email','$address','$phone_no','$roll_no')";
	// var_dump($sql_query); die();
	$result = $connect->query($sql_query);
	if($result){
		echo "Successfully inserted";
	}
	else{
		echo "Sorry";
	}
?>