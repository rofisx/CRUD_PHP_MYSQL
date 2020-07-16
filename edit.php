<html> 
<head>
  <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>  
  <link rel="stylesheet" type="text/css" href="style.css"> </head><body>  
  	<div class="judul">     
  		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
     <h2>Project Contoh Arkademy</h2>   
  	</div>    
  	<br/>    
  	<a href="index.php">Lihat Semua Data</a>   
 <br/>  
 <h3>Edit data</h3>    
 <?php
   include "koneksi.php";
   $nama_produk = $_GET['nama_produk'];  
   $query_mysql = mysqli_query($host,"SELECT * FROM produk WHERE nama_produk='$nama_produk'")or die(mysql_error());  
   $nomor = 1;  
   while($data = mysqli_fetch_array($query_mysql)){  
   ?>  
   <form action="update.php" method="post">     
   	<table>    
   		<tr>        
   			<td>      
   				<input type="hidden" name="nama_produk" value="<?php echo $data['nama_produk'] ?>">      
   			   
   			</td>         
   		</tr>     
   		<tr>     
   			<td>Nama Barang</td>     
   			<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>" readonly>
   			</td>         
   		</tr>     
   		<tr>     
   			<td>Keterangan</td>     
   			<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>">
   			</td>         
   		</tr> 
      <tr>     
        <td>Harga</td>     
        <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>">
        </td>         
      </tr> 
      <tr>     
        <td>Jumlah</td>     
        <td><input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>">
        </td>         
      </tr>   
   		<tr>     
   			<td></td>     
   			<td><input type="submit" value="Simpan"></td>         
   		</tr>       
   		</table>  
   	</form>  
   	<?php } ?> 
   </body> 
   </html> 