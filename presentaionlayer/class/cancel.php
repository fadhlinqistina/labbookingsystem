<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Lab<span>Booking</span></h1>
		<nav>
		
		<ul> 
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="searchteacher.php ">Search Teacher</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>

		</ul>
		
	</nav>

</header>

<body>
	
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button name="cancel" type="submitC" onClick="confirmationCancel();" class="btn">Cancel</button>
	</div>

		</form>
	</form>

	<script type="text/javascript">
	function confirmationCancel(){
		var answer = confirm('Are you sure you want to cancel booking ?');
		if(answer){
			form1.submitC();
		}
		else{
			alert("Cancelled the booking!")
		}
	}
	</script>
</body>
</html>