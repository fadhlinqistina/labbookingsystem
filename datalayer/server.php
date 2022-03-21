<?php 
session_start();
$errors=array();

$mysqli = new mysqli("localhost", "root", "", "labbooking");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['Register'])) {

	$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$ClassCode 	= $mysqli -> real_escape_string($_POST['ClassCode']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
	$Standard 	= $mysqli -> real_escape_string($_POST['Standard']);

	if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($ClassCode)) {
	array_push($errors,"Class Code is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}

if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}

if (empty($Standard)) {
	array_push($errors,"Standard is required");
	# code...
}

if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO classes (UserID, Name, ClassCode, ContactNumber, Email, Password, Standard) VALUES ('$UserID','$Username','$ClassCode','$ContactNumber','$Email','$Password','$Standard')";
    

	if (!$mysqli -> query($sql)) {
	printf("%d Row inserted.\n", $mysqli->affected_rows);
    
}
	
	$message = '';
	if ( isset ($_POST['Login'])){
		
		$UserID = $_POST['$UserID'];
		$Password = $_POST['$Password'];
		if ($UserID != '' && $Password != ''){
			
			include ("myinfo.php");
			$sql = "SELECT UserID, password FROM classes WHERE $UserID = '$UserID' AND password = '$Password'";
			$result = mysqli_query($sql) or die('SQL error user');
			$row = mysqli_fetch_array($result, mysqli_assoc);
			if (mysqli_num_rows($result) ==1){
				session_start();
				$_SESSION['isLogged_in'] = true;
				$_SESSION['$UserID'] = $row['UserID'];
				$_SESSION['$Password'] = $row['$Password'];
				$message = 'Logged-in successfully';
				echo "<script type='text/javascript'>alert('$message')</script>";
				header("location:../presentaionlayer/class/index.php");
			}
			else if (($UserID==='$UserID') && ($Password==='$Password')){
				session_start();
				$_SESSION['isLogged_in'] = true;
				header("location:index.php");
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('LOGIN FAILED!')</script>";
				header("Location: error.php");

			}
		}
	}
	

}
	# code...
}

if (isset($_POST['Login'])) {
	echo $_POST['Login'];

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['password']);
		
if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password is required");

		# code...
	}

	if (count ($errors)== 0) {

	$Password=md5($Password);
		
	$query= "SELECT * FROM classes WHERE UserID=('$UserID') AND password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows ($result) ==1 )  {
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="you are now logged in";
	
  	header('location:../presentaionlayer/class/index.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
	
	}
}

	$userprofile=isset($_SESSION['UserID']);
	$query= "SELECT * FROM classes WHERE UserID=('$userprofile')";
	$result= mysqli_query($mysqli, $query);
	$col= mysqli_fetch_assoc($result);

	# code...

if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}


	if (isset($_GET['My info'])) {
		header('location:login.php');
	}

	$userprofile=isset($_SESSION['UserID']);
	$query="SELECT * FROM classes WHERE UserID=('$userprofile')";
	$result= mysqli_query($mysqli, $query);
	$col= mysqli_fetch_assoc($result);
 
	

	if (isset($_POST['Login2'])) {

		$TeacherID2	= $mysqli -> real_escape_string($_POST['teacherID']);
		$TeacherPassword2= $mysqli -> real_escape_string($_POST['teacherpassword']);
	if (empty($TeacherID2)) {
		array_push($errors,"Teacher ID is required");
		# code...
	}
	if (empty($TeacherPassword2)) {
		array_push($errors,"Password is required");
		# code...
	}


	if (count ($errors)== 0) {

		$queryT="SELECT * FROM teacher WHERE TeacherID=('$TeacherID2')AND password=('$TeacherPassword2')";
		$resultT=mysqli_query($mysqli,$queryT);
		if (mysqli_num_rows($resultT) ==1 )  {
	
			$_SESSION['TeacherID']=$TeacherID2;
			$_SESSION['success']="you are now logged in";
	
			header('location:../presentaionlayer/teacher/index2.php'); 
		}  else{
			array_push($errors,"The ID/Password not correct");
		
		}
	}
}

	$teacherprofile=isset($_SESSION['TeacherID']);
	$queryteacher="SELECT * FROM teacher WHERE TeacherID=('$teacherprofile')";
	$resultteacher= mysqli_query($mysqli, $queryteacher);
	$colT= mysqli_fetch_assoc($resultteacher);


 if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
}

 if (isset($_POST['bookingHistory'])) {
		  	header('../presentaionlayer/class/myinfo.php');
			 ?>
		
         	<table class="table2" style="margin-top: -10px">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Booking History</caption>
		<tr>
		<th>TeacherID</th> 
		<th>TeacherName</th>
		<th>Booking</th>
		<th>Teacher's Note</th>	


		</tr> 
		
	<?php  
		$sql11="SELECT  * FROM  description, teacher WHERE descID=('$userprofile') AND teacherIDdesc=TeacherID" ;
		$result11=$mysqli->query($sql11);
		if(mysqli_num_rows($result11)>=1){
			while ($row11=$result11->fetch_assoc()) {

				echo "<tr><td>".$row11['TeacherID']."</td><td>".$row11['Teachername']."</td><td>".$row11['booking']."</td><td>".$row11['Note']."</td></tr>";
			}

			echo "</table";
		}
}
		  ?>
 </table>

<?php  

if (isset($_POST['Login3'])) {

	$adminID = $mysqli -> real_escape_string($_POST['adminID']);
	$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
	
	if (empty($adminID)) {
		array_push($errors,"Admin ID is required");
	# code...
	}
	if (empty($adminpassword)) {
		array_push($errors,"Password is required");
		# code...
	}

	if (count ($errors)== 0) {

		$queryA="SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
		$resultA=mysqli_query($mysqli,$queryA);
		
		if (mysqli_num_rows($resultA) ==1 )  {
			$_SESSION['AdminID']=$adminID;
			$_SESSION['success']="you are now logged in";
			header('location:../presentaionlayer/admin/index3.php'); 
		}  else{
			array_push($errors,"The ID/Password not correct");
		}
	}
}

 if (isset($_POST['sendnotes'])) {
	$notes2 = $mysqli -> real_escape_string($_POST['notex']);

	$sqlnote = "INSERT INTO  notes (cID,notes) VALUES ('$userprofile','$notes2') ";

	if (!$mysqli -> query($sqlnote)) {
		printf("%d Row inserted.\n", $mysqli->affected_rows);

	}

}
   
 ?>