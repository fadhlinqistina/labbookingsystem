<?php include ('bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

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
			<li><a href="searchdonoradmin.php">Schedule</a></li>
			<li><a href="notes.php">Notes</a></li>

  			<li><a href="Teacherclass.php">Logout</a></li>

		</ul>
		
	</nav>

</header>
<body>
	<body text="#00000">

    <!--Table Frame-->
    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <!--Header-->
            <td colspan="2" align=center valign="woodBG.jpg">
                <table width="100%" background="boarder.jpg" style="color:white;font-family:Forte">
                    <tr>
                        <td align="center"><h3 style="color:White;font-family:'Bookman Old Style'">SK Paya Keladi</h3></td>
                        <td width="60%" align="center" style="color:White;font-family:Forte"><font size="+16"> Lab Booking System </font></td>
                        <td><img src="Logo.jpg" width="150" /></td>
                    </tr>
                </table>
            </td>
        </tr>

        

            <td background="SKPK3.jpg">

		<div class="headerA">
	<h2>Add Teacher</h2>
	</div>

	<form method="post" action="index3.php">

	<?php include ('errors.php'); ?>

	<div class="input-groupA">
		<label>Teacher ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Teacher Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="Standard 1">Standard 1</option>
	   		<option value="Standard 2">Standard 2</option>
	   		<option value="Standard 3">Standard 3</option>
	   		<option value="Standard 4">Standard 4</option>
	   		<option value="Standard 5">Standard 5</option>
			<option value="Standard 6">Standard 6</option>

	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Teacher</button>
	</div>

</form>
	<div class="headerAT">
	<h2>Delete Teacher</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Teacher ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>

</body>

</html>