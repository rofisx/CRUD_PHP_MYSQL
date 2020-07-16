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
		<a href="index.php">Lihat Semua Data</a>
		 <br/>
		  <h3>Input data baru</h3>  
		  <form action="input-aksi.php" method="post">     
		  	<table>
		  	    <tr>
		  	         <td>Nama Barang</td>
		  	         <td><input type="text" name="nama_produk"></td>         
		  	     </tr>
		  	      <tr>     
		  	      	<td>Keterangan</td>     
		  	      	<td><input type="text" name="keterangan"></td>    
		  	      </tr>     
		  	      <tr>     
		  	      	<td>Harga</td>     
		  	      	<td><input type="text" name="harga"></td>         
		  	      </tr>     
		  	       <tr>     
		  	      	<td>Jumlah</td>     
		  	      	<td><input type="text" name="jumlah"></td>         
		  	      </tr> 
		  	      <tr>     
		  	      	<td></td>     
		  	      	<td><input type="submit" value="Simpan"></td> 

		  	      </tr>
		  	   </table>  
		  	</form> 
		  </body> 
	</html> 