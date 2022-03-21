<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

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
			<li><a href="notes.php">Notes</a></li>
			<li><a href="developer.php">Developer</a></li>
			<li><a href="../../applicationlayer/Teacherclass.php">Logout</a></li>

		</ul>
	</nav>

</header>

<body>
	
			
	<h1 style="margin-left:40% ;margin-top:80px" class="asd"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Teacher ID</th>
		<th>Class ID</th>
		<th>Date</th>
		<th>Time</th>
		

		</tr>

		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["teaID"]."</td><td>".$row3["classID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";
		}

		?>
		
	</table>
	<br>
	   <h1 style="margin-left:37% ;margin-top:70px" class="asd">Send Confirmation Email </h1>

    <form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;margin-top:110px;margin-left: -10px;">

    
    <div classs="xa" style="margin-top:0px" align=center>
	<br>
        <label for="email" style="width:40px;">Email</label>
        <input type="email"  id="email" name="email" maxlength="50" style="width:400px;" placeholder="torey@gmail.com">
    <br>
        <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
        <input type="text"  id="subject" name="subject" maxlength="50" style="width:400px;" placeholder="Appointment Confirmation">
    <br>   
        <label for="name" style="margin:10px ;display:inline-block;" >Message</label>
        <input type="text" placeholder="this is a Confirmation email for your appointment ID:" type="textarea"  id="message" name="message" rows="1" style="width:400px;padding-top: 10px" maxlength="2000">
    <br>           
               
        <center>
        <button type="submit"  id="message" name="sendemail" style="width:200px;height:30px;border-radius: 10px; background: #992828 ;margin-left:45%;color: white; align: center">Send</button>
               
        
        </div>
        </form>
    
    
    <?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'FROM:n.fadhlin22@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>
</body>
</html>