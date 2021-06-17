<?php
	require_once('database.php');
?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];
	$roll_no = $_POST['roll_no'];
	// var_dump($name, $email, $address, $phone_no, $roll_no); die();

	$sql_query = "UPDATE `user` SET `name`='$name',`email`='$email',`address`='$address',`phone_no`='$phone_no',`roll_no`='$roll_no' WHERE `id` = '$id'";
	// var_dump($sql_query); die();
	$result = $connect->query($sql_query);
	if($result){
		echo "Successfully updated";
	}
	else{
		echo "Sorry";
	}
?>