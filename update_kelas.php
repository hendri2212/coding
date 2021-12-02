<?php
    include "./config.php";

    $id         = $_POST['id'];
    $nama_kelas = $_POST['nama_kelas'];

    mysqli_query($koneksi, "UPDATE
    data_kelas SET nama_kelas='$nama_kelas' WHERE id='$id'");

    header('Location: kelas.php');
?>