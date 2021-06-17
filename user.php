<?php
	require_once('database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone No</th>
							<th>Roll No</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql_query="SELECT * FROM `user` ORDER BY `id` DESC";
							// var_dump($sql_query); die();
							$result = $connect->query($sql_query);
							if($result){
							while ($row = $result->fetch_assoc()) {
						?>
						<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['phone_no'];?></td>
							<td><?php echo $row['roll_no']; ?></td>
							<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>
						<?php
							}
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<a href="index.php">Insert User</a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>