<?php
    include "./config.php";

    $query  = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<!-- CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>

    <div class="col-6">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data->id ?>">
            <div class="mb-3">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" value="<?= $data->nama_siswa ?>">
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <select name="kelas_id" class="form-control">
                    <option value="<?= $data->kelas_id ?>"><?= $data->kelas_id ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">Multimedia</option>
                </select>
            </div>
            <div class="mb-3">
                <label>No. Handphone</label>
                <input type="number" name="no_hp" class="form-control" value="<?= $data->no_hp ?>">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"><?= $data->alamat ?></textarea>
            </div>
            <div class="btn-group">
                <a href="index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>