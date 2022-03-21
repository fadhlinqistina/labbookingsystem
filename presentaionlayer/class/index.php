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
		<div class="headerC" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px">
	<h2>My Information</h2>
</div>

<form method="post" action="index.php"  class="infoC" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">

<div class="contentC" style="font-weight: bold;">

	<label>ID: <?php echo "" .$_SESSION['UserID'];?></label>

	<?php
		$test = $_SESSION['UserID'];
		$sqlz="select * from labsystem.classes where UserID='$test'";
		$resultss=$mysqli->query($sqlz);

		while($sqlz=$resultss->fetch_assoc()){  
			$UserID=$sqlz['UserID'];
			$Name=$sqlz['Name'];
			$ClassCode=$sqlz['ClassCode'];
			$ContactNumber=$sqlz['ContactNumber'];
			$Email=$sqlz['Email'];
			$Standard=$sqlz['Standard'];
		}
	?>
	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $Email; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $Name; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Class Code : <?php echo $ClassCode; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $ContactNumber; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Standard : <?php echo $Standard; ?></label>
	 	   	 	   <br>
	 	   <br>
    
	 	   </div>

	 	   	<div class="input-group">
		<button type="submit" name="bookingHistory" class="btn" style=" border-radius: 5px;margin-left: 80%; border:none;padding: 10px 20px 10px 20px">My Booking History</button>
 
</div>
	<div class="input-group">
		<button type="submit" name="notes" class="btn" style=" border-radius: 5px;margin-left: 80%; border:none;padding: 10px 30px 10px 30px">Send Notes</button>
	</div>

  
</form>

	<?php  
	  if (isset($_POST['notes'])) {
?>
<form method="post" action="index.php" class="infoP" style="margin-left:500px; margin-top:0px ;width: 40%;padding: 20px ;
border:none ;background: white; ">
<div class="input-group">
		<div  class="header" style="width: 78%;height: 25px;margin-top:-450px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px 13px 10px 13px;margin-left:60%  ">
	<h2>Notes</h2>
</div>
<textarea name="notex" placeholder="Write something.." style="height:300px;width: 500px ; margin-top:0px;margin-left: 60%;border:2px solid #39ca74;border-radius: 10px" ></textarea>
<button type="submit" name="sendnotes" class="btn" style=" border-radius: 15px 15px 15px 15px;margin-center: 60.5%; margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>

</div>

 <?php  }
 

?>
</form>



</body>
<!/html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 

        $Classsearch = mysqli_real_escape_string($mysqli,$_POST['Classsearch']);
	
	$query="SELECT * FROM classes WHERE UserID=('$Classsearch')";
	$result2=mysqli_query($mysqli,$query);
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
</html>