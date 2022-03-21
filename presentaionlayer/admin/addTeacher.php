<?php include("server.php");
	
	$TeacherID =@$_POST['id'];
	$teachername =@$_POST['name'];
	$ContactNumber =@$_POST['contactNumber'];
	$Address =@$_POST['address'];
	$Email =@$_POST['email'];
	$Password =@$_POST['teacherpassword'];
	$Category =@$_POST['category'];
	
	$sql="insert into teacher values('$TeacherID', '$teachername', '$ContactNumber', '$Address', '$Email', '$Password', '$Category')";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	if ($res==1) echo "OK";

	mysqli_close($mysqli);

?>