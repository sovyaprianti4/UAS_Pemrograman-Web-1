<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : 'login';

switch ($url) {

    case 'login':
        require_once "../app/views/auth/login.php";
        break;

    case 'mahasiswa':
        require_once "../app/views/mahasiswa/index.php";
        break;

    case 'tambah-mahasiswa':
        require_once "../app/views/mahasiswa/tambah.php";
        break;

    case 'simpan-mahasiswa':
        require_once "../app/models/Mahasiswa.php";
        $mhs = new Mahasiswa();
        $mhs->insert(
            $_POST['nim'],
            $_POST['nama'],
            $_POST['jurusan'],
            $_POST['alamat']
        );
        header("Location: ?url=mahasiswa");
        exit;

    case 'edit-mahasiswa':
        require_once "../app/views/mahasiswa/edit.php";
        break;

    case 'update-mahasiswa':
        require_once "../app/models/Mahasiswa.php";
        $mhs = new Mahasiswa();
        $mhs->update(
            $_POST['id'],
            $_POST['nim'],
            $_POST['nama'],
            $_POST['jurusan'],
            $_POST['alamat']
        );
        header("Location: ?url=mahasiswa");
        exit;

    case 'hapus-mahasiswa':
        require_once "../app/models/Mahasiswa.php";
        $mhs = new Mahasiswa();
        $mhs->delete($_GET['id']);
        header("Location: ?url=mahasiswa");
        exit;
    case 'proses-login':
    $username = $_POST['username'];
    $password = $_POST['password'];

    // akun login (untuk UAS)
    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['login'] = true;
        header("Location: ?url=mahasiswa");
    } else {
        header("Location: ?url=login&error=1");
    }
    exit;

case 'logout':
    session_destroy();
    header("Location: ?url=login");
    exit;

    default:
        echo "Halaman tidak ditemukan";
}
