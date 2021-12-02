<?php
    include "./config.php";

    mysqli_query($koneksi, "DELETE FROM data_kelas WHERE id='$_GET[id]'");

    header('Location: kelas.php');
?>