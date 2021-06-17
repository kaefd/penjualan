<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="create.php" method="post">		
		<table>
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode_brg"></td>					
			</tr>	
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_brg"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="create" name="create"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>