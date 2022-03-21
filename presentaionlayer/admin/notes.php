<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Lab<span>Booking</span></h1>
		<nav>
	
		<ul> 

			<li><a href="index3.php">Add/Delete Teacher</a></li>
			<li><a href="viewteacher.php">View Teacher</a></li>
			<li><a href="viewclass.php">View Class</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="notes.php">Notes</a></li>
			<li><a href="developer.php">Developer</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>

		</ul>
	</nav>

</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px" class="asd">Class Notes</h1>
	<table class="table4" style="width: 100%">
		<tr>
		<th>Class ID</th>
		<th>Class Name</th>
		<th>Notes</th>

		</tr>

		<?php $sql3="SELECT  * FROM  classes,notes WHERE cID=UserID " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["cID"]."</td><td>".$row3["Name"]."</td><td>".$row3['notes']."</td></tr>";
			}

			echo "</table";
		}

		?>
		
	</table>
</body>
</html>