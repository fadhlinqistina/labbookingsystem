<?php include ('../../datalayer/bookserver.php'); ?>
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

<form method="post" action="add.php" class="add">

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

			<div class="input-group">
		<label style="font-weight: bold;">ClassID</label>
	   	<input type="text" name="Classsearch" class="xd">

	</div>

	<div class="input-group">
		<button type="submit" name="SearchCA" class="btn">Search</button>
	</div>

	<?php  


	  if (isset($_POST['SearchCA'])) {

	$Classsearch = mysqli_real_escape_string($mysqli,$_POST['Classsearch']);
	
	$query="SELECT * FROM classes WHERE UserID=('$Classsearch')";
	$result2=mysqli_query($mysqli,$query);
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>

<div class="input-group">
		<label>Class ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

	</div>

	<div class="input-group">
		<label>Booking</label>
		<input type="text" name="Booking">
	</div>

	<div class="input-group-add">
		<label>Note</label>
		<input style="" type="text" name="Note">
	</div>


	 <div class="input-group">
		<button name="AddD" type="submitAdd" onClick="confirmationAdd();" class="btn">Add</button>
	 </div>


	<?php  

	}
	 ?>
			 </div>
  
<?php 
}
	    ?>

	    <?php  


if (isset($_POST['AddT'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$booking 			= $mysqli -> real_escape_string($_POST['Booking']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

if (empty($booking)) {
	array_push($errors,"Booking is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}

if(count($errors)==0){

	$sql7 = "INSERT INTO  description (descID,descName,booking,note,teacherIDdesc) VALUES ('$descID','$descName','$booking','$note','$teacherprofile') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",$mysqli->affected_rows);?></h2>	
			
		<?php 
	}
}
}

?>

</form>

<script type="text/javascript">
	function confirmationAdd(){
		var answer = confirm('Are you sure you want to add description ?');
		if(answer){
			form1.submitAdd();
		}
		else{
			alert("Cancelled Add Description!")
		}
	}
</script>

</body>

</html>