<?php
require_once '../app/models/Mahasiswa.php';

$id = $_GET['id'];
$mhs = new Mahasiswa();
$data = mysqli_fetch_assoc($mhs->getById($id));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #CCFBFF, #EF96C5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-custom {
            width: 600px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #6fb1fc, #ef96c5);
            border: none;
            color: white;
        }

        .btn-gradient:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="card card-custom p-4">
    <h4 class="text-center mb-4">Edit Mahasiswa</h4>

    <form action="?url=update-mahasiswa" method="post">
        <input type="hidden" name="id" value="<?= $data['id_mahasiswa'] ?>">

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" value="<?= $data['nim'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-gradient w-100">Update</button>
    </form>
</div>

</body>
</html>
