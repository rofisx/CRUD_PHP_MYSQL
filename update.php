<?php    
include 'koneksi.php'; 
$nama_produk = $_POST['nama_produk']; 
$keterangan = $_POST['keterangan'];  
$harga = $_POST['harga'];  
$jumlah = $_POST['jumlah'];
mysqli_query($host,"UPDATE produk SET Keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE nama_produk='$nama_produk'");   
header("location:index.php?pesan=update"); 
?> 
 