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
	
<form method="post" action="searchteacher.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Teacher ID<br>*Teacher Name<br>*Category</label>
		<input type="text" name="tID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

		</form>
	</form>
	<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>Teacher ID</th>
		<th>Teacher Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> 
		<?php  

		$tID =$mysqli -> real_escape_string($_POST['tID']);

		$sql6="SELECT  * FROM  teacher   WHERE 	Teachername=('$tID') OR TeacherID=('$tID') OR category=('$tID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["TeacherID"]."</td><td>".$row6["Teachername"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['category']."</td></tr>";
			}

			echo "</table";
		}
		}?>
 </table>

</body>
</html>


