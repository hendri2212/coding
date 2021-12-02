<?php
    include "./config.php";
    $query = mysqli_query($koneksi, "SELECT * FROM data_kelas");
?>
<h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>
<!-- CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="simpan.php" method="post">
            <div class="mb-3">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" placeholder="Ketik nama siswa disini">
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <select name="kelas_id" class="form-control">
                    <option value="" disabled>Pilih Salah Satu</option>
                    <?php while($data = mysqli_fetch_object($query)){ ?>
                    <option value="<?= $data->id ?>"><?= $data->nama_kelas ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label>No. Handphone</label>
                <input type="number" name="no_hp" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Ketik alamat disini"></textarea>
            </div>
            <div class="btn-group">
                <a href="index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>