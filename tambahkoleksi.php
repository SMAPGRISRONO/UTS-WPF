<html>
	<head>
	<title>Perpustakaan</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
		<body align = "center">
		<div class="atas">
		<img  src="20540172.png" width="100" height="100" align="left">
		<h2><center>SISTEM INFORMASI PERPUSTAKAAN SMA PGRI SRONO</h2></center>
		
		<center><h3>Jl. MOJOPAHIT NO:03 SRONO</h3></center>
		</div>
		<div class="tengah">
		</div>
		<div class="home">
		<div class="background">
            <nav>
                <ul>
            <li align="left"><a href="tampilanadmin.php" >Beranda</a></li>
            <li align="left"><a href="index.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                    </ul>
            </nav>
            </div>
		 

	
<h1>Tambah Koleksi Buku</h1>
		<form action="" id="lg-form" method="post">
			
			<div>
				<label for="kdbuku">Kode Buku :</label>
				<input type="text" name="kode" id="kdbuku" placeholder="kdbuku"/>
			</div>
			
			<div>
				<label for="nmbuku">Nama Buku :</label>
				<input type="tex" name="nama" id="nmbuku" placeholder="nmbuku" />
			</div>
			<div>
				<label for="jnsbuku">Jenis Buku :</label>
				<input type="tex" name="jenis" id="jnsbuku" placeholder="jnsbuku" />
			</div>
			<div>
				<label for="jumlah">Jumlah :</label>
				<input type="tex" name="jumlah" id="jumlah" placeholder="jummlah" />
			</div>
			<div>				
                <input id="Simpan" type='submit' value='simpan' name='simpan'>
			</div>
			
		</form>
	</div>   
</body>    
</html>
