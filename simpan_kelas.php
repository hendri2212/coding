<?php
    include "./config.php";

    $nama_kelas = $_POST['nama_kelas'];

    mysqli_query($koneksi, "INSERT INTO
    data_kelas (nama_kelas)
    VALUE ('$nama_kelas')");

    header('Location: kelas.php');
?>