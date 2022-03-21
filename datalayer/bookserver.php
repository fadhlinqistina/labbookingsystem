<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost", "root", "", "labbooking");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['Book'])) {

	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$Time 	= 	$mysqli -> real_escape_string($_POST['Time']);
	
	if (empty($AppoID)) {
	array_push($errors,"Appointment ID is required");
}

if (empty($Date)) {
	array_push($errors,"Date is required");
	# code...
}


if (empty($Time)) {
	array_push($errors,"Time is required");
	# code...
}


if(count($errors)==0){

    $teaID = $_REQUEST['teaID'];
	$sql = "INSERT INTO  bookapp (AppoID, Date, Time, classID, teaID) VALUES ('$AppoID','$Date','$Time','$userprofile','$teaID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysqli->affected_rows);

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="you are now logged in";
  header('location:book.php');

}

}


if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {

	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND classID=('$userprofile') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Appointment ID");
			
			# code...
		}

	}
	  else {
	  
	  echo 'Book is Canceled';

	  }
}
}

if (isset($_POST['Add'])) {


	$addID 				= $mysqli -> real_escape_string($_POST['addID']);
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);

	if (empty($addID)) {
	array_push($errors,"Teacher ID is required");
	# code...
}

if (empty($addname)) {
	array_push($errors,"Teacher Name is required");
	# code...
}


if (empty($addAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}

if (empty($addEmail)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($addPassword)) {
	array_push($errors,"Password is required");
	# code...
}

if(count($errors)==0){

		$addcategory = $_REQUEST['addcategory'];


	$sqladd = "INSERT INTO teacher (TeacherID, Teachername, email, Address, ContactNumber, password, category) VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";

	if ($mysqli -> query($sqladd)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);

}


  $_SESSION['addID']=$addID;
  $_SESSION['success']="you are now logged in";
  header('location:index3.php');

}

	# code...
}

if (isset($_POST['Delete'])) {

		$deleteID =$mysqli -> real_escape_string($_POST['deleteID']);

	if (empty($deleteID)) {
	array_push($errors,"Teacher ID is required");
}
 if (count($errors)==0) {

	$querydelete="DELETE FROM teacher WHERE TeacherID='$deleteID' ";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Teacher ID");
			
			# code...
		}
	}
	  else {
	  
	  echo 'Book is Canceled';
	  }

	}
}

?>

<!-- $query1="SELECT category FROM teacher";
   $result1= mysqli_query($mysqli, $query1);
   $opt="<select name='Category'>";
   while ($row= mysqli_fetch_assoc($result1)) {
   	$opt.="<option value ='{$row['category']}'>{$row['category']}</option>";
   }
   	$opt.="</select>";
 
   }

}
-->


