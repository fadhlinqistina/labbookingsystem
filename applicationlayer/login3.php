<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>


<body text="#00000">

    <!--Table Frame-->
    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <!--Header-->
            <td colspan="2" align=center valign="woodBG.jpg">
                <table width="100%" background="boarder.jpg" style="color:white;font-family:Forte">
                    <tr>
                        <td align="center"><h3 style="color:White;font-family:'Bookman Old Style'">SK Paya Keladi</h3></td>
                        <td width="60%" align="center" style="color:White;font-family:Forte"><font size="+16"> Lab Booking System </font></td>
                        <td><img src="Logo.jpg" width="150" /></td>
                    </tr>
                </table>
            </td>
        </tr>

            <td background="SKPK3.jpg">
			
	<body class="Abody">
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">

	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

</form>

</body>
</html>