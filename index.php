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
    <div class="my-3 d-flex justify-content-between">
        <div>
            <a href="index.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Siswa</a>
            <a href="kelas.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Kelas</a>
        </div>
        <div>
            <a href="login.php" class="bg-success p-2 mr-2 text-decoration-none text-white">Login</a>
        </div>
    </div>

    <?php
        include "./config.php";
        if (isset($_POST['search'])) {
            $query = mysqli_query($koneksi,
            'SELECT data_siswa.id, nama_siswa, nama_kelas, no_hp, alamat 
            FROM data_siswa JOIN data_kelas ON data_siswa.kelas_id = data_kelas.id
            WHERE nama_siswa or alamat LIKE "%'.$_POST["search"].'%"');
        } else {
            $query = mysqli_query($koneksi,
            'SELECT data_siswa.id, nama_siswa, nama_kelas, no_hp, alamat 
            FROM data_siswa JOIN data_kelas ON data_siswa.kelas_id = data_kelas.id');
        } ?>

        <div class="d-flex justify-content-between mb-3">
            <div class="col">
                <a href="input.php" class="btn btn-info">Data Baru</a>
            </div>
            <div class="col-4">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" name="search" placeholder="Type me here" class="form-control">
                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
        </div>
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
                            <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</body>
</html>