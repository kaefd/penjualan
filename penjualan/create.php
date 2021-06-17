<?php

include("koneksi.php");

if(isset($_POST['create'])){

    $kode_brg = $_POST['kode_brg'];
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];

    // buat query
    $sql = "INSERT INTO Barang (kode_brg, nama_brg, harga) VALUE ('$kode_brg', '$nama_brg', $harga)";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>