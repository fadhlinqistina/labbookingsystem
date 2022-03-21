<?php include('../datalayer/server.php');?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="1st.php" enctype="multipart/form-data">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID" >

	</div>


	<div class="input-group">
		<label>Name</label>
		<input type="text" name="Name" >


	</div>

	<div class="input-group">
		<label>Class Code</label>
		<input type="text" name="ClassCode">

	</div>

	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="ContactNumber">


	</div>


	<div class="input-group">
		<label>Email address</label>
		<input type="text" name="Email">

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password">

	</div>
	
	<div class="input-group">
		<label>Standard</label>
		<input type="text" name="Standard">

	</div>
   

	<div class="input-group">
		<button name="Register" type="submit" onClick="showAlert();" class="btn">Register</button>
	</div>

	<p>
		Already a member? <a href="login.php">Sign in </a>
	</p>
</form>
	
	<script type="text/javascript">
	function showAlert() {
		var reg = "Register Successfully!";
		alert (reg);
	}
  </script>
</body>
</html>