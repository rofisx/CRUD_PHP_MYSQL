<?php  
include 'koneksi.php'; 
$nama_produk = $_GET['nama_produk']; 
mysqli_query($host,"DELETE FROM produk WHERE nama_produk='$nama_produk'")or die(mysql_error());   
header("location:index.php?pesan=hapus"); 
?> 