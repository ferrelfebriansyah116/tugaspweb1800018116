<?php
$nama=$_POST['nama'];
$nim=$_POST['nim'];
if($nama==""){
	header("location:tugas.php?nama=kosong");	
} 
else{
	echo "Nama anda : ".$nama;
}
if($nim==""){
	header("location:tugasvalidasi.php?nim=kosong");	
} 
else{
	echo "<br> Nim anda : ".$nim;
} 
?>