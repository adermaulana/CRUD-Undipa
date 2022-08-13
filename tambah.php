<?php

include("koneksi.php");


if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $Umur = $_POST['Umur'];

   
    $sql = "INSERT INTO mahasiswa (nama, alamat, jenis_kelamin, agama, Umur) VALUE ('$nama', '$alamat', '$jk', '$agama', '$Umur')";
    $query = mysqli_query($koneksi, $sql);

    
    if( $query ) {
        
        header('Location: tampil.php?status=sukses');
    } else {
        
        header('Location: tampil.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>