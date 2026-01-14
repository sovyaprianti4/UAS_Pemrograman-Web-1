<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.bg-app {
    min-height: 100vh;
    background: linear-gradient(135deg, #CCFBFF, #EF96C5);
}
</style>
</head>
<body>

<div class="bg-app d-flex justify-content-center pt-5">
<div class="container col-md-8">

<div class="card shadow-lg rounded-4 p-4">

<h3>Tambah Mahasiswa</h3>
<small class="d-block mb-4">
    Login sebagai: <b><?= $_SESSION['role'] ?></b> |
    <a href="?url=logout">Logout</a>
</small>

<form method="post" action="?url=simpan-mahasiswa">

<div class="mb-3">
    <input name="nim" class="form-control" placeholder="NIM" required>
</div>

<div class="mb-3">
    <input name="nama" class="form-control" placeholder="Nama" required>
</div>

<div class="mb-3">
    <input name="jurusan" class="form-control" placeholder="Jurusan" required>
</div>

<div class="mb-3">
    <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="?url=mahasiswa" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</div>

</body>
</html>
