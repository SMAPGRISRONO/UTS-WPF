<?php
$NISN = $_POST["NISN"];
$Nama = $_POST["nama"];
$ID = $_POST["id"];
$judul = $_POST["judul"];
$pinjam = $_POST["pinjam"];
$kembali= $_POST["kembali"];
$petugas = $_POST["petugas"];

$data=array("NISN"=>"$NISN","NAMA"=>"$Nama","IDBuku"=>"$ID","judul"=>"$judul","tanggalpinjam"=>"$pinjam","tanggalkembali"=>"$kembali","petugas"=>"$petugas");
echo "<table border='1'>";
foreach($data as $a=> $b )
{
 echo "<tr><td>$a</td><td>$b</td></tr>";
}
echo "</table>";

?>