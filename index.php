<!DOCTYPE html>
<html>
<head>
	<title>Php insert</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container">
	<!-- my project passs -->
	<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="action.php" method="POST">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Please enter your name" required="true" name="name">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Please enter your email" required="true" name="email">
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="address" placeholder="Please enter your address" required="true" name="address">
						</div>
					</div>
					<div class="form-group">
						<label for="phone_no" class="col-sm-2 control-label">Phone No</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="phone_no" placeholder="Please enter your phone no" required="true" name="phone_no">
						</div>
					</div>
					<div class="form-group">
						<label for="roll_no" class="col-sm-2 control-label">Roll Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="roll_no" placeholder="Please enter your roll no" required="true" name="roll_no">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
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