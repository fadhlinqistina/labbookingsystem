<?php include("server.php"); 
	
	$AppoID =@$_POST['AppoID'];
	$Date =@$_POST['Date'];
	$Time =@$_POST['Time'];
	$classID =@$_POST['classID'];
	$teaID =@$_POST['teaID'];
  
	$sql="select * from bookapp";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	while($r=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$json[]=$r;
	}
	
	echo json_encode($json,JSON_UNESCAPED_UNICODE);
	mysqli_free_result($res);
	mysqli_close($mysqli);
?>
