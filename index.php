<html> 
<head>  
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	  <link rel="stylesheet" type="text/css" href="style.css"> 
</head> 
<body>  
	<div class="judul">     
	   <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
	   <h2>Project Contoh Arkademy</h2>  
	</div>  
	<br/>    
			<?php   
			if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];   
			if($pesan == "input"){
			    echo "Data berhasil di input.";   
			}else if
			($pesan == "update"){
			    echo "Data berhasil di update.";   }
			else if($pesan == "hapus"){
			    echo "Data berhasil di hapus.";   
			}  
		}  
		?>  
		<br/>  
		<a class="tombol" href="input.php">+ Tambah Data Baru</a>    
		<h3>Data Barang</h3>  
		<table border="1" class="table">   
				<tr>    
					<th>No</th>    
					<th>Nama Barang</th>    
					<th>Keterangan</th>    
					<th>Harga</th>    
					<th>Jumlah</th>     
				</tr>   
				<?php    
				include "koneksi.php";   
				$query_mysql = mysqli_query($host,"SELECT * FROM produk")or die(mysql_error());   
				$nomor = 1;
				   while($data = mysqli_fetch_array($query_mysql)){   
				?>   
				<tr>
				    <td><?php echo $nomor++; ?></td>    
				    <td><?php echo $data['nama_produk']; ?></td>       
				    <td><?php echo $data['keterangan']; ?></td>    
				    <td><?php echo $data['harga']; ?></td>
				    <td><?php echo $data['jumlah']; ?></td>
				    <td>     
				    	<a class="edit" href="edit.php?nama_produk=<?php echo $data['nama_produk']; ?>">Edit</a> |     
				    	<a class="hapus" href="hapus.php?nama_produk=<?php echo $data['nama_produk']; ?>">Hapus</a>        
				    </td>   
				</tr>   
				<?php } ?>  
		</table> 
	</body> 
</html> 