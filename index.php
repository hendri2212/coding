<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Siswa</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    <h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>
    <div class="mb-3">
        <a href="index.php" class="bg-danger p-2 mr-2 text-white">Home</a>
        <a href="siswa.php" class="bg-danger p-2 mr-2 text-white">Data Siswa</a>
        <a href="guru.php" class="bg-danger p-2 mr-2 text-white">Data Guru</a>
    </div>

    <?php
        include "./config.php";
        $query = mysqli_query($koneksi, 'SELECT data_siswa.id, nama_siswa, nama_kelas, no_hp, alamat FROM data_siswa JOIN data_kelas ON data_siswa.kelas_id = data_kelas.id') ?>

        <a href="input.php" class="btn btn-info">Data Baru</a> <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no=1; while($data = mysqli_fetch_array($query)){ ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_siswa'] ?></td>
                    <td><?= $data['nama_kelas'] ?></td>
                    <td><?= $data['no_hp'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-success">Edit</a>
                            <a href='delete.php?id=<?= $data['id'] ?>' class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</body>
</html>