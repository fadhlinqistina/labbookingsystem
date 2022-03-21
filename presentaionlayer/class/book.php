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

	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	
	
			<div class="input-group">
		<label>Standard</label>
	   	<select name="category" class="xd">
	   		<option value="Standard1">Standard 1</option>
	   		<option value="Standard2">Standard 2</option>
	   		<option value="Standard3">Standard 3</option>
	   		<option value="Standard4">Standard 4</option>
	   		<option value="Standard5">Standard 5</option>
			<option value="Standard6">Standard 6</option>

	   	</select>

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	<?php  

	  if (isset($_POST['Search'])) {

	$category = mysqli_real_escape_string($mysqli,$_POST['category']);
	
	$query2="SELECT * FROM teacher WHERE category=('$category')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>Teacher ID</label>
			

		<select class="input-group2" name="teaID">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		
		?>
		<option> <?php echo $row2['TeacherID'] ?> </option>
		
	   <?php 

	} ?>
	 </select> 
	 </div>


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID" >

	</div>

	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Time</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
		<button name="Book" type="submitB" onClick="confirmationBook();" class="btn">Book</button>
	</div>
	 
	 <?php  
}
	    ?>

</form>

 <script type="text/javascript">
	function confirmationBook(){
		var answer = confirm('Are you sure you want to book ?');
		if(answer){
			form1.submitB();
		}
		else{
			alert("Cancelled Booking Class!")
		}
	}
</script>

</body>

</html>