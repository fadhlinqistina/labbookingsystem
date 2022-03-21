<?php include '../../datalayer/bookserver.php'; ?>
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
	
			<li><a href="index2.php">My Info</a></li>
			<li><a href="teacherapp.php">My Appointments</a></li>
			<li><a href="searchclass.php">Search Class</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>

		</ul>
		
	</nav>
</header>

<body>

<form method="post" action="searchclass.php" class="classsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Class ID</label>
		<label style="font-weight: bold">*Class Name</label>
		<input type="text" name="CID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchC" class="btn">Search</button>
	</div>

		</form>
	</form>

		<?php 

         if (isset($_POST['SearchC'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Class Information</caption>>

		<tr>
		<th>ClassID</th>
		<th>Name</th>
		<th>Class Code</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Standard</th>

		</tr> <?php  

		$CID =$mysqli -> real_escape_string($_POST['CID']);

		$sqlC="SELECT  * FROM  classes WHERE UserID=('$CID') OR Name=('$CID') " ;
		$resultC=$mysqli->query($sqlC);
		if(mysqli_num_rows($resultC)==1){
			while ($rowC=$resultC->fetch_assoc()) {

				echo "<tr><td>".$rowC["UserID"]."</td><td>".$rowC["Name"]."</td><td>".$rowC["ClassCode"]."</td><td>".$rowC["ContactNumber"]."</td><td>".$rowC['Email']."</td><td>".$rowC['Standard']."</td></tr>";
			}
			echo "</table";
		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchC'])) {

         ?>	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Booking History</caption>>
		<tr>
		<th>ClassID</th>
		<th>ClassName</th>
		<th>Booking</th>
		<th>Teacher's Note</th>	

		</tr> <?php  

		$CID =$mysqli -> real_escape_string($_POST['CID']);

		$sqlC2="SELECT  * FROM  description  WHERE descID=('$CID') OR descName=('$CID') " ;
		$resultC2=$mysqli->query($sqlC2);
		if(mysqli_num_rows($resultC2)>1){
			while ($rowC2=$resultC2->fetch_assoc()) {

				echo "<tr><td>".$rowC2["descID"]."</td><td>".$rowC2["descName"]."</td><td>".$rowC2["booking"]."</td><td>".$rowC2['Note']."</td></tr>";
			}

			echo "</table";
		}
	}?>
 </table>
	
</body>
</html>


