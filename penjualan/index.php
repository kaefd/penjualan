<?php
include("koneksi.php");
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
    <!-- <script type="text/javascript">
			$(document).ready(function(){
			var getUsername = window.localStorage.getItem('restoranapk_username');
			if(getUsername == "" || getUsername == null)
			{
				window.location.href = 'login.html';
			}
			$('#welcomeText').html('Selamat Datang, ' + window.localStorage.getItem('restoranapk_username'));
			$('#kesandanpesan').click(function(){
			window.location.href = 'kesan_pesan.html';
			});

			$('#datamakanan').click(function(){
			window.location.href = 'makanan.html';
			});

			$('#dataminuman').click(function(){
			window.location.href = 'minuman.html';
			});

			$('#datausers').click(function(){
			window.location.href = 'get_data_user.html';
			});

			$('#logout').click(function(){
			window.localStorage.setItem('restoranapk_username', '');
			window.location.href = 'login.html';
			});
			});
		</script>
-->
    <nav class="navbar navbar-expand-lg text-light bg-dark">
      <a class="navbar-brand text-light" href="#">PENJUALAN</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-light" href="#"
              >Data Barang<span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Transaksi</a>
          </li>
        </ul>
      </div>
    </nav>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "berhasil!";
            } else {
                echo "gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    <!-- tabel Barang -->
    <div class="container shadow mt-3 p-3">
      <h3>DATA BARANG</h3>
    </div>
    <div class="container shadow pt-4 pb-3">
      <input
        class="form-control w-25"
        type="text"
        id="myInput"
        onkeyup="myFunction()"
        placeholder="Search ..."
        title="Type in a name"
      />
      <a href="input.php">
       <button class="btn btn-info">
          Tambah
        </button>
      </a>
    </div>
    <div class="container pt-4 pl-3 shadow">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody id="myData">
          <?php
                    
          $sql = "SELECT * FROM Barang";
          $query = mysqli_query($db, $sql);

          while($row = mysqli_fetch_array($query)){
              
      echo "<tr>";
          echo "<td>".$row['kode_brg']."</td>";
          echo "<td>".$row['nama_brg']."</td>";
          echo "<td>".$row['harga']."</td>";

          echo "<td class='text-center'>";
          
                echo "<a title='edit' href='edit.php?kode_brg=".$row['kode_brg']."'><i class='material-icons' style='font-size: 20px; color: #1e8cb8'>edit</i></a>";
                echo "<a href='delete.php?kode_brg=".$row['kode_brg']."'><i class='material-icons' style='font-size:20px; color:red';>delete</i></a>";
          echo "</td>";
          echo "</tr>";
          
          }
        ?>

        </tbody>
      </table>
    </div>
  </body>
</html>
