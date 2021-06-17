<?php
	require_once('database.php');
?>
<?php
	$id = $_GET['id'];
// var_dump($id); die();
	$sql_query = "DELETE FROM `user` WHERE `id` = '$id'";
	// var_dump($sql_query); die();
	$result = $connect->query($sql_query);
	if($result){
		echo "Successfully deleted";
	}
	else{
		echo "Sorry";
	}
?>