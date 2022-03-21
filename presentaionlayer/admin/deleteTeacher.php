<?php include("server.php");

	$TeacherID =@$_POST['TeacherID']; 
	$sql = "delete from teacher where TeacherID='$TeacherID'";
	$res = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	if ($res==1) echo "OK_DEL";
	mysqli_close($conn);
?>
