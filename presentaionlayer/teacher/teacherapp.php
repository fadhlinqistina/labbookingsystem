<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Lab<span>Booking</span></h1>
		<nav>
	
		<ul> 
			<<li><a href="index2.php">My Info</a></li>
			<li><a href="teacherapp.php">My Appointments</a></li>
			<li><a href="searchclass.php">Search Class</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>

		</ul>

	</nav>
</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>ClassID</th>
		<th>ClassName</th>
		<th>ClassAddress</th>
		<th>ClassEmail</th>
		<th>ClassContactNumber</th>
		<th>Standard</th>

		</tr>
		<?php $sqltea="SELECT  * FROM bookapp , classes  WHERE teaID=('$teacherprofile') AND  classID=UserID " ;
		$resulttea=$mysqli->query($sqltea);
		if(mysqli_num_rows($resulttea)>= 1){
			while ($rowtea=$resulttea->fetch_assoc()) {

				echo "<tr><td>".$rowtea["AppoID"]."</td><td>".$rowtea["Date"]."</td><td>".$rowtea["Time"]."</td><td>".$rowtea["UserID"]."</td><td>".$rowtea['Name']."</td><td>".$rowtea['ClassCode']."</td><td>".$rowtea['Email']."</td><td>".$rowtea["ContactNumber"]."</td><td>".$rowtea["Standard"]."</td></tr>";
			}
			echo "</table";
	}
		?>
		
	</table>
</body>
</html>

