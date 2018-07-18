<?php
session_start();
if(isset($_SESSION['user'])) header("Location:main.php");
?>
<html>
<head>
<style>
	#login-controls {
		border: 1 px solid #ccc;
		padding: 50px;
		margin-top: 50px;
	}
	.error-text {
		color:#f00;
	}

	.a {
		font-size: 20px;
	}

	h1 {
		font-size: 35px;
	}

</style>
</head>
<body bgcolor="#53bd84">
<div align='center'>
<div id="login-controls">
<h1>LOGIN</h1>
<?php if(@$_GET['err'] ==1) { ?>
<div class="error-test">Login incorrect. Please try again</div>
<?php } ?>
<form method="POST" action="proses.php">
<div class="a"><p>Username:<br/>
<input type="text" name="user"/>
</p></div>
<div class="a"><p>Password:<br/>
<input type="password" name="pass"/>
</p></div>
<input type="submit" name="op" value="login"/>
</form>
</div>
</body>
</html>