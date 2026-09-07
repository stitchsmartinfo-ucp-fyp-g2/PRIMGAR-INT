<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Primgar International</title>
    <link rel="stylesheet" href="/Primgar International/index.css">
    <style>
        body { background: #000; color: #fff; display: flex; align-items: center; justify-content: center; height: 100vh; }
        .login-box { background: #111; padding: 40px; border-radius: 10px; width: 100%; max-width: 400px; text-align: center; }
        .login-box h2 { margin-bottom: 20px; font-weight: 700; color: var(--red-accent); }
        .form-control { width: 100%; padding: 15px; margin-bottom: 15px; background: #222; border: 1px solid #333; color: white; border-radius: 5px; }
        .btn { width: 100%; padding: 15px; background: var(--red-accent); color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .btn:hover { background: var(--red-bright); }
        .error { color: #ff4d4d; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-box">
        <img src="/Primgar International/images/primgar-logo.png" alt="Primgar International" style="height: 50px; margin-bottom: 20px;">
        <h2>Admin Login</h2>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form action="/Primgar International/admin/login" method="POST">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
