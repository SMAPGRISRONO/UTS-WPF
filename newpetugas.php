<html>
	<head>
	<title>Perpustakaan</title>
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
				<div class="background"></div>

		<div class="home">

		
<?php
$Nama = $_POST["nama"];
$Nip = $_POST["nip"];

$data=array("Nama" =>"$Nama","Nip"=>"$Nip");
echo "<table width='270' border='4' align='center'>";

foreach($data as $a=> $b )
{
 echo "<tr><td>$a</td><td>$b</td></tr>";
}
echo "</table>";

?>
</div>