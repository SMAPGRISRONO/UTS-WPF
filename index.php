<?php
	include("login.php");
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$login = new login($user,$pass);
		$login->pengguna();
	}	
?>
<html>
    <head>
    <title>login</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <form method="POST">
		<div class="log">
			<h1 align="center">Sistem Informasi Perpustakaan</h1>
			<input type="text" id="input" class="Input-text" name="user" placeholder="Masukkan Username">
			<br>
			<input type="password" id="input" class="Input-text" name="pass" placeholder="Masukkan Password">
			<br>
			<input type="submit" class="Input-btn" name="login" value="Login"/>
		</div>
		</form>
    </body>
</html>