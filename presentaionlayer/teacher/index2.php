<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >Lab<span>Booking</span></h1>
		<nav>
	
		<ul > 

			<li><a href="index2.php">My Info</a></li>
			<li><a href="teacherapp.php">My Appointments</a></li>
			<li><a href="searchclass.php">Search Class</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>
		</ul>
	</nav>

</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">

<div class="Tcontent">


	<label>ID: <?php echo "" .$_SESSION['TeacherID'];?></label>
	
		<?php
		$testT = $_SESSION['TeacherID'];
		$sqlT="select * from labsystem.teacher where TeacherID='$testT'";
		$resultT=$mysqli->query($sqlT);

		while($sqlT=$resultT->fetch_assoc()){  
			$TeacherID=$sqlT['TeacherID'];
			$Email=$sqlT['email'];
			$Teachername=$sqlT['Teachername'];
			$Address=$sqlT['Address'];
			$ContactNumber=$sqlT['ContactNumber'];
			$category=$sqlT['category'];
		}
		?>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $Email; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $Teachername; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $Address; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $ContactNumber; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $category; ?></label>
	 	   	 	   <br>
	 	   <br> 
</div>

</form>

</body>
</html>