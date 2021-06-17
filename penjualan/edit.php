<?php

include("koneksi.php");

if( !isset($_GET['kode_brg']) ){
    header('Location: index.php');
}

$kode_brg = $_GET['kode_brg'];

$sql = "SELECT * FROM Barang WHERE kode_brg=$kode_brg";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="IKND" />

    <title>e-Penjualan</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <!-- Our custom css -->
    <link rel="stylesheet" href="\public\ourCss.css" />
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script
      src="https://kit.fontawesome.com/aa6793a002.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
        <div class="container-fluid shadow mt-3 p-3">
		  <h3>UPDATE DATA</h3>
		</div>

    </header>
	
	<div class="container-fluid shadow mt-3 p-3">
	    <form action="update.php" method="POST">
			<p>
				<input type="hidden" name="kode_brg" placeholder="kode barang" value="<?php echo $row['kode_brg'] ?>" />
			</p>
			<p>
				<label for="nama_brg">Nama Barang: </label>
				<input type="text" name="nama_brg" value="<?php echo $row['nama_brg'] ?>" />
			</p>
			<p>
				<label for="harga">Harga : </label>
				<input type="text" name="harga" value="<?php echo $row['harga'] ?>"/>
			</p>
			 <p>
				<button class="btn btn-info" type="submit" name="simpan">Simpan</button>
			</p>

		</form>

	</div>
	

    </body>
</html>