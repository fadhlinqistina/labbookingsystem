<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Teacher</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
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

	<body class="Tbody">
	<div class="Theader">
	<h2>Teacher Login</h2>
</div>

<form method="post" action="login2.php" class="Tform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupT">
		<label>Teacher ID</label>
		<input type="text" name="teacherID">

	</div>

	<div class="input-groupT">
		<label>Password</label>
		<input type="Password" name="teacherpassword">

	<div class="input-groupT">
		<button type="submit" name="Login2" class="btnT"> Login</button>
	</div>

</form>

</body>
</html>