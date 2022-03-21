<?php include ('../../datalayer/server.php'); ?>

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
<body >
		<div class="headerC" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Information</h2>
</div>



<form method="post" action="myinfo.php" class="infoC" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">

<div class="contentC" style="font-weight: bold;">

	<label>ID: <?php echo "" .$_SESSION['UserID'];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Class Code : <?php echo $col['ClassCode']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Standard : <?php echo $col['Standard']; ?></label>
	 	   	 	   <br>
	 	   <br>

	 	   	<div class="input-group">
		<button type="submit" name="bookingHistory" class="btn">My-Booking-History</button>
	</div>
	
</div>

  
</form>

<?php  if (isset($_POST['bookingHistory'])) {
			 ?>
		
         	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Booking History</caption>
		<tr>
		<th>TeacherID</th>
		<th>TeacherName</th>
		<th>Booking</th>
		<th>Teacher's Note</th>	

		</tr> 
		
		<?php

		$CID =$mysqli -> real_escape_string($_POST['UserID']);

		$sqlC2="SELECT  * FROM  description WHERE descID=('$CID') OR descName=('$CID') " ;
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

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
</html>