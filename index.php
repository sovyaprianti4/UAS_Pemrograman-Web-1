<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : 'login';

/* ===== PROTEKSI LOGIN ===== */
if (!isset($_SESSION['login']) && !in_array($url, ['login','proses-login'])) {
    header("Location: ?url=login");
    exit;
}

switch ($url) {

    case 'login':
        require "../app/views/auth/login.php";
        break;

    case 'proses-login':
        // username & password BEBAS
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['role'] = $_POST['role'];

        header("Location: ?url=mahasiswa");
        exit;

    case 'logout':
        session_destroy();
        header("Location: ?url=login");
        exit;

    case 'mahasiswa':
        require "../app/views/mahasiswa/index.php";
        break;

    /* ===== ADMIN ONLY ===== */
    case 'tambah-mahasiswa':
        if ($_SESSION['role'] != 'admin') {
            echo "<h3>Akses ditolak</h3>";
            exit;
        }
        require "../app/views/mahasiswa/tambah.php";
        break;

    case 'simpan-mahasiswa':
        if ($_SESSION['role'] != 'admin') exit;
        require "../app/models/Mahasiswa.php";
        (new Mahasiswa())->insert(
            $_POST['nim'],
            $_POST['nama'],
            $_POST['jurusan'],
            $_POST['alamat']
        );
        header("Location: ?url=mahasiswa");
        exit;

    case 'edit-mahasiswa':
        if ($_SESSION['role'] != 'admin') exit;
        require "../app/views/mahasiswa/edit.php";
        break;

    case 'update-mahasiswa':
        if ($_SESSION['role'] != 'admin') exit;
        require "../app/models/Mahasiswa.php";
        (new Mahasiswa())->update(
            $_POST['id'],
            $_POST['nim'],
            $_POST['nama'],
            $_POST['jurusan'],
            $_POST['alamat']
        );
        header("Location: ?url=mahasiswa");
        exit;

    case 'hapus-mahasiswa':
        if ($_SESSION['role'] != 'admin') exit;
        require "../app/models/Mahasiswa.php";
        (new Mahasiswa())->delete($_GET['id']);
        header("Location: ?url=mahasiswa");
        exit;

    default:
        echo "Halaman tidak ditemukan";
}
