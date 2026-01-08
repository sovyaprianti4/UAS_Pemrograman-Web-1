<?php
require_once '../app/models/Mahasiswa.php';

if (isset($_POST['simpan'])) {
    $mhs = new Mahasiswa();
    $mhs->insert(
        $_POST['nim'],
        $_POST['nama'],
        $_POST['jurusan'],
        $_POST['alamat']
    );
    header("Location: ?url=mahasiswa");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
<h3>Tambah Mahasiswa</h3>

<form method="post" action="?url=simpan-mahasiswa">
<input name="nim" class="form-control mb-2" placeholder="NIM" required>
<input name="nama" class="form-control mb-2" placeholder="Nama" required>
<input name="jurusan" class="form-control mb-2" placeholder="Jurusan" required>
<textarea name="alamat" class="form-control mb-2" placeholder="Alamat"></textarea>
<button class="btn btn-primary">Simpan</button>
</form>
</div>

