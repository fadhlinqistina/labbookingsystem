<?php include "server.php";

	$AdminID=@$_POST['AdminID'];  
	$adminpassword=@$_POST['adminpassword'];  

	$check_data = mysqli_query($mysqli, "SELECT * FROM admin WHERE AdminID='$AdminID' and adminpassword='$adminpassword'");

	$check = mysqli_num_rows($check_data);


	if($check > 0){  
		echo "1000";
	}  
		else{  
			echo "2000";  
		}  
	$sql = "select * from admin";
	$res=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
	if ($res==1) echo "OK";
	mysqli_close($mysqli);   

?>