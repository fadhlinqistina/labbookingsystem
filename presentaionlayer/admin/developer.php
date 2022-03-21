<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

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
<body align=center>
	<center>
	 <font color=lime  align=center>
                <h1 id="blink" align="center"> UiTM Cawangan Kedah ! <br> Web Developer</h1>
                <script type="text/javascript">
                var blink = document.getElementById('blink');
                setInterval(function() {
                            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                }, 1500);
                </script>
	</center>
    </font><br><br><br>
	
                    <center>
                    <img src="uitm.png" width="650" />
                    </center><br>
                    <p align="center">
                        Special Thanks To Our Supportive Lecturer Madam Saffa & Madam Taniza
                    </p>
                    <br>

					
	<table border="5" bordercolor="red" align="center">
    <tr>
        <th colspan="8">Web Developer Information</th> 
    </tr>
    <tr>
		<th>Photo</th>
        <th>Name</th>
        <th>Identification Card</th>
        <th>Student ID</th>
		<th>Programme Code</th>
		<th>Programme</th>
		<th>Class</th>
		<th>Mail</th>
		
    </tr>
    <tr>
		<td><img src="Fadhlin.jpg" alt="Mountains" border=3 height=100 width=100></img></th>
        <td>Nur Fadhlin Qistina Binti Yahya<a href=https://mail.google.com/mail/u/2/#inbox target=_blank></th>
        <td>000122-01-1200</th>
		<td>2019867804</th>
		<td>CS 110</th>
		<td>Science Computer & Mathematic</th>
		<td>KCS 110 4L</th>
		<td><a href="mailto:n.fadhlin22@gmail.com">Email Fadhlin</a></th>
    </tr>
    <tr>
        <td><img src="AinaShaf.jpg" alt="Mountains" border=3 height=100 width=100></img></th>
        <td>Aina Shafiqah Binti Mohd Hasan<a href=https://mail.google.com/mail/u/2/#inbox target=_blank></th>
        <td>010305-02-0934</th>
		<td>2019270752</th>
		<td>CS 110</th>
		<td>Science Computer & Mathematic</th>
		<td>KCS 110 4L</th>
		<td><a href="mailto:aina.shaf0934@gmail.com">Email Aina</a></th>
    </tr>
    <tr>
        <td><img src="Mariana.jpg" alt="Mountains" border=3 height=100 width=100></img></th>
        <td>Mariana Atikah Binti Mohmad Nasa'ai<a href=https://mail.google.com/mail/u/2/#inbox target=_blank></th>
        <td>010207-07-0268</th>
		<td>2019807246</th>
		<td>CS 110</th>
		<td>Science Computer & Mathematic</th>
		<td>KCS 110 4L</th>
		<td><a href="mailto:marianaatikah0101@gmail.com">Email Mariana</a></th>
    </tr>
	</table>

</body>
</html>
