<html>
	<head>
	<title>Perpustukaan</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<div class="atas">
		<img  src="20540172.png" width="100" height="100" align="left">
		<h2><center>SISTEM INFORMASI PERPUSTAKAAN SMA PGRI SRONO</h2></center>
		
		<center><h3>Jl. MOJOPAHIT NO:03 SRONO</h3></center>
		</div>
		<div class="tengah">
        <nav>
                <ul>
            <li align="left"><a href="tampilanadmin.php" >Beranda</a></li>
            <li align="left"><a href="index.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                    </ul>
                    </nav>

        </div>
				<div class="home">
                     
<form method="POST" action="newadmin.php">

<tr for="nama">
<td>Nama</td>
<td>&nbsp;&nbsp;<input type="text" name="nama" maxlength="30" size="40"  placeholder="Masukkan Nama"></td>
</tr>

<tr for="nip">
<td>Nip</td>
<td>&nbsp;&nbsp;<input type="text" name="nip" maxlength="30" size="40"  placeholder="Masukkan Nip"></td>
</tr>
				<td><input type="submit" name="simpan" value="Simpan"/>
				<input type="reset" value="Reset"></td>
			</tr>
			
			</div>

	</body>
</html>