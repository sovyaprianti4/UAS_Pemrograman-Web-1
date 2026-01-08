<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

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

        .login-card {
            width: 380px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #6fb1fc, #ef96c5);
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="card login-card p-4">
    <h4 class="text-center mb-4">Login Aplikasi</h4>

    <!-- 🔴 INI YANG DIPERBAIKI -->
    <form action="?url=proses-login" method="post">

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-gradient w-100">Login</button>
    </form>
</div>

</body>
</html>
