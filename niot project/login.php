<?php
session_start();
?>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" href="style.css">
	<img src="niot.jpg" >
<script type="text/javascript">
/*function fnsubmit()
{
	alert("login success")
}
*/

</script>


</head>
<body>
	<div id="form">
		
	<form action="process.php" method="post" enctype="multipart/form-data"> 
		<fieldset>
			<legend>personal information</legend>
			<p>
			<label>username</label>
			<input type="text" name="user" id="user">
			</p>	
			<p>
			<label>password</label>
			<input type="password" name="pass" id="pass">
			</p>
			<p>
			<input type="submit" id="btn"  value="login">
			</p>
		</fieldset>
	</form> 
	</div>
</body>
</html>
