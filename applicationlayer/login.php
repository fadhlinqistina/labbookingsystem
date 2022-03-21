<?php include('../datalayer/server.php') ?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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

	<div class="header">
	<h2>Class Login</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">

	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>

</form>

</body>
</html>