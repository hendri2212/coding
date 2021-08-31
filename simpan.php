<?php
    include "./config.php";

    $nama_siswa = $_POST['nama_siswa'];
    $kelas_id   = $_POST['kelas_id'];
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO
    data_siswa (nama_siswa, kelas_id, no_hp, alamat)
    VALUE ('$nama_siswa', '$kelas_id', '$no_hp', '$alamat')");

    // header('Location: index.php');
?>