<html>
	<head>
	<title>Peminjaman Buku</title>
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
        <li><a href="peminjaman2.php">Data Peminjaman</a></li>
        <li><a href="peminjaman.php">Peminjaman</a>
		<li><a href="pengembalian.php">Pengembalian</a></li>
        </li>
        <li><a href="databuku.php">Data Buku</a>
        </li>
        <li><a href="index.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
		</div>
		<div class="home">
			
		<table class="tabel2" border="2">

		<center><h2>Peminjaman Buku<h2></center>
<form method="POST" action="peminjaman2.php">

<tr for="NISN">
<td>NISN</td>
<td>&nbsp;&nbsp;<input type="text" name="NISN" maxlength="30" size="40"  placeholder="Masukkan NISN"></td>
</tr>

<tr for="nama">
<td>Nama</td>
<td>&nbsp;&nbsp;<input type="text" name="nama" maxlength="30" size="40"  placeholder="Masukkan Nama"></td>
</tr>

<tr for="id">
<td>ID Buku</td>
<td>&nbsp;&nbsp;<input type="text" name="id" maxlength="30" size="40" ></td>
</tr>

<tr for="judul">
<td>Judul Buku</td>
<td>&nbsp;&nbsp;<input type="text" name="judul" maxlength="30" size="40"  ></td>
</tr>

<tr for="pinjam">
<td>Tanggal Pinjam</td>
<td>&nbsp;&nbsp;<input type="date" name="pinjam" maxlength="30" size="40" ></td>
</tr>

<tr for="kembali">
<td>Tanggal Kembali</td>
<td>&nbsp;&nbsp;<input type="date" name="kembali" maxlength="30" size="40" ></td>
</tr>

<tr for="petugas">
<td>Petugas</td>
<td>&nbsp;&nbsp;<input type="text" name="petugas" maxlength="30" size="40" ></td>
</tr>
<tr>
				<td><input type="submit" name="simpan" value="Simpan"/>
				<input type="reset" value="Reset"></td>
			</tr>
			
			</div>

	</body>
</html>