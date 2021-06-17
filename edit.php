<?php
	require_once('database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Php insert</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container">
	<div class="row">
			<div class="col-md-6">
				<?php
				$id = $_GET['id'];
				$sql_query="SELECT * FROM `user` WHERE `id` = '$id'";
				$result = $connect->query($sql_query);
				if($result){
				while ($row = $result->fetch_assoc()) {
				?>
				<form class="form-horizontal" action="update.php" method="POST">
					<div class="form-group">
						<label for="id" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="id" required="true" readonly="true" name="id" value="<?php echo $row['id']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Please enter your name" required="true" name="name" value="<?php echo $row['name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Please enter your email" required="true" name="email" value="<?php echo $row['email']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="address" placeholder="Please enter your address" required="true" name="address" value="<?php echo $row['address']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="phone_no" class="col-sm-2 control-label">Phone No</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="phone_no" placeholder="Please enter your phone no" required="true" name="phone_no"value="<?php echo $row['phone_no']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="roll_no" class="col-sm-2 control-label">Roll Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="roll_no" placeholder="Please enter your roll no" required="true" name="roll_no" value="<?php echo $row['roll_no']; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Update</button>
						</div>
					</div>
				</form>
				<?php
			}
		}
		?>
			</div>
			<div class="col-md-6">
				<a href="user.php">View All User</a>
			</div>
		</div>
</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>