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
	<h1 class="my">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Teacher ID</th>
		<th>Teacher Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr>
		<?php $sql3="SELECT  * FROM bookapp , teacher WHERE classID=('$userprofile') AND teaID=TeacherID " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["teaID"]."</td><td>".$row3['Teachername']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["category"]."</td></tr>";
			}

			echo "</table";
		}
		?>
	</table>

<!--	<table class="table3">
		<tr>
		<th>Teacher Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		teacher.teachername , teacher.Address,teacher.ContactNumber,teacher.category
,teacher
AND teaID= ('$userprofile')
.$row3["Teachername"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>
		<?php $sql4="SELECT teacher.Teachername,teacher.Address,teacher.ContactNumber,teacher.category FROM teacher " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Teachername"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";
		}

		?>
		
	</table>
-->

</body>
</html>

