
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
        <li>
        </li>
        <li><a href="databuku.php">Data Buku</a>
        </li>
        <li><a href="index.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
		</div>
		<div class="home">
			<form method="POST" action="peminjaman1.php">
		<table class="tabel2" border="2">
            
            <center><h2>Data Peminjaman</h2>
            
                <?php
            include('peminjaman1.php');
                ?>
		
           
			</center>
            </form>
			</div>

	</body>
</html>