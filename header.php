<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .header-gradient {
            background: linear-gradient(135deg, #CCFBFF, #EF96C5);
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<div class="container mt-4">

<div class="header-gradient">
    <h3>Data Mahasiswa</h3>
    <small>
        Login sebagai: <b><?= $_SESSION['role'] ?></b> |
        <a href="?url=logout">Logout</a>
    </small>
</div>
