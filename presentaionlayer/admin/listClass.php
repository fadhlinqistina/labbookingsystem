<?php include("server.php"); 
	
	$UserID =@$_POST['UserID'];
	$Name =@$_POST['Name'];
	$ClassCode =@$_POST['ClassCode'];
	$ContactNumber =@$_POST['ContactNumber'];
	$Email =@$_POST['Email'];
	$Password 	=@$_POST['password'];
	$Standard =@$_POST['Standard'];
	
	$sql="select * from classes";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	while($r=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$json[]=$r;
	}
	
	echo json_encode($json,JSON_UNESCAPED_UNICODE);
	mysqli_free_result($res);
	mysqli_close($mysqli);
?>
