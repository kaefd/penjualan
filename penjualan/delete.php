<?php

include("koneksi.php");

if( isset($_GET['kode_brg']) ){

    $kode_brg = $_GET['kode_brg'];

    $sql = "DELETE FROM Barang WHERE kode_brg=$kode_brg";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
