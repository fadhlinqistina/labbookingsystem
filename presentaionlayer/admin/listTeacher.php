<?php include("server.php"); 
	
	$TeacherID =@$_POST['id'];
	$teachername =@$_POST['name'];
	$ContactNumber =@$_POST['contactNumber'];
	$Address =@$_POST['address'];
	$Email =@$_POST['email'];
	$Password =@$_POST['teacherpassword'];
	$Category =@$_POST['category'];
	
	$sql="select * from teacher";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	while($r=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$json[]=$r;
	}
	
	echo json_encode($json,JSON_UNESCAPED_UNICODE);
	mysqli_free_result($res);
	mysqli_close($mysqli);
?>
