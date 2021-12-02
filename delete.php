<?php
    include "./config.php";

    mysqli_query($koneksi, "DELETE FROM data_siswa WHERE id='$_GET[id]'");

    header('Location: index.php');
?>