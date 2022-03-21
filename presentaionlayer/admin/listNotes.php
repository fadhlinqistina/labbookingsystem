<?php include("server.php"); 
	
	$UserID =@$_POST['UserID'];
	$ClassName =@$_POST['ClassName'];
	$Notes =@$_POST['Notes'];

	
	$sql="select * from Notes";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	while($r=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$json[]=$r;
	}
	
	echo json_encode($json,JSON_UNESCAPED_UNICODE);
	mysqli_free_result($res);
	mysqli_close($mysqli);
?>
