<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $kode_brg = $_POST['kode_brg'];
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];

    $sql = "UPDATE Barang SET nama_brg='$nama_brg', harga='$harga' WHERE kode_brg=$kode_brg";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>