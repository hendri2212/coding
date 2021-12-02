<?php
    include "./config.php";

    $query  = mysqli_query($koneksi, "SELECT * FROM data_kelas WHERE id='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>
<!-- CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="update_kelas.php" method="post">
            <input type="hidden" name="id" value="<?= $data->id ?>">
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" value="<?= $data->nama_kelas ?>">
            </div>
            <div class="btn-group">
                <a href="kelas.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>