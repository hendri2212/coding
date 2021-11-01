<?php
    include "./config.php";

    $id         = $_POST['id'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas_id   = $_POST['kelas_id'];
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE
    data_siswa
    SET nama_siswa='$nama_siswa', kelas_id='$kelas_id', no_hp='$no_hp', alamat='$alamat'
    WHERE id='$id'");

    header('Location: index.php');
?>