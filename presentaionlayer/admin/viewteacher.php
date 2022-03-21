<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="style5.css">

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

    <td background="SKPK3.jpg">
	<h1 style="margin-left:35% ;margin-top:80px" class="asd">Teacher Information</h1>
	<table class="table4">
		<tr>
		<th>Teacher ID</th>
		<th>Teacher Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Password</th>
		<th>Category</th>

		</tr>

		<?php $sql3="SELECT * FROM  teacher " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["TeacherID"]."</td><td>".$row3["Teachername"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3['password']."</td><td>".$row3["category"]."</td></tr>";
			}
			echo "</table";
		}
		?>
		
	</table>
	
	<h1 style="margin-left:40% ;margin-top:80px" class="asd"></h1>
	<table class="table4">
		<tr>
		<th>Total Teacher Register </th>
		</tr>
		
		<?php 
			$sqlT="select count('TeacherID') from teacher";
			$resultT=mysqli_query($mysqli,$sqlT);
			$row=mysqli_fetch_array($resultT);
			echo "<td>$row[0]</td>";
			mysqli_close($mysqli);
		?>
	</table>
	
</body>
</html>