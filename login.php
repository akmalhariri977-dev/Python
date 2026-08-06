<?php
$photoFiles = array_fill(0, 12, 'kita.jpg');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Romantis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --rose: #ff5d8f;
            --rose-dark: #c1356f;
            --pink: #ff8fa3;
            --cream: #fff7fb;
            --text: #5b2f49;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 20px;
            color: var(--text);
            background:
                radial-gradient(circle at 20% 20%, rgba(255,93,143,0.18) 0%, transparent 24%),
                radial-gradient(circle at 80% 0%, rgba(255,143,163,0.18) 0%, transparent 24%),
                linear-gradient(135deg, #fff6fb 0%, #ffeef4 100%);
            overflow: visible;
            position: relative;
            animation: softBackground 12s ease-in-out infinite alternate;
        }
        @keyframes softBackground {
            0% { background-position: 0% 0%, 100% 0%, 0% 0%; }
            100% { background-position: 20% 20%, 80% 20%, 100% 100%; }
        }
        body::before, body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(4px);
            opacity: 0.35;
            pointer-events: none;
        }
        body::before {
            width: 220px; height: 220px; background: rgba(255,93,143,0.22); top: -40px; right: -60px;
        }
        body::after {
            width: 260px; height: 260px; background: rgba(255,143,163,0.14); bottom: -80px; left: -80px;
        }
        .photo-burst {
            position: absolute;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
            opacity: 0.95;
        }
        .photo-card {
            position: absolute;
            border-radius: 20px;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
            background-size: cover;
            background-position: center;
            opacity: 0.82;
            transform: rotate(var(--rotate));
            animation: driftPhoto var(--duration) ease-in-out infinite, glowPulse 4s ease-in-out infinite;
            animation-delay: var(--delay), calc(var(--delay) + 0.4s);
        }
        .photo-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: linear-gradient(135deg, rgba(255,255,255,0.08), rgba(0,0,0,0.12));
        }
        @keyframes driftPhoto {
            0%, 100% { transform: translate3d(0, 0, 0) rotate(var(--rotate)); }
            50% { transform: translate3d(10px, -12px, 0) rotate(calc(var(--rotate) + 4deg)); }
        }
        @keyframes glowPulse {
            0%, 100% { box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
            50% { box-shadow: 0 18px 40px rgba(255,93,143,0.22); }
        }
        .card-login {
            width: min(280px, 80%);
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255,93,143,0.2);
            border-radius: 22px;
            box-shadow: 0 18px 45px rgba(193,53,111,0.16);
            padding: 16px 14px;
            position: relative;
            z-index: 2;
        }
        .heart {
            width: 60px; height: 60px; margin: 0 auto 10px;
            background: linear-gradient(135deg, var(--rose), var(--pink));
            transform: rotate(45deg);
            border-radius: 14px;
            position: relative;
            box-shadow: 0 10px 25px rgba(255,93,143,0.25);
        }
        .heart::before, .heart::after {
            content: '';
            position: absolute;
            width: 60px; height: 60px;
            background: inherit;
            border-radius: 50%;
        }
        .heart::before { top: -30px; left: 0; }
        .heart::after { left: -30px; top: 0; }
        .login-title {
            font-family: 'Great Vibes', cursive;
            font-size: 1.4rem;
            margin: 0 0 3px;
            color: var(--rose-dark);
            text-align: center;
        }
        .login-subtitle {
            text-align: center;
            font-size: 0.75rem;
            color: #8a5f72;
            margin-bottom: 10px;
        }
        .form-label {
            font-weight: 600;
            color: var(--rose-dark);
            margin-bottom: 3px;
            font-size: 0.80rem;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid rgba(255,93,143,0.2);
            padding: 7px 9px;
            font-size: 0.82rem;
            transition: all 0.2s ease;
            margin-bottom: 6px;
        }
        .form-control:focus {
            border-color: var(--rose);
            box-shadow: 0 0 0 0.2rem rgba(255,93,143,0.14);
        }
        .btn-login {
            width: 100%;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--rose), var(--pink));
            color: white;
            font-weight: 600;
            padding: 8px 10px;
            margin-top: 3px;
            font-size: 0.85rem;
            box-shadow: 0 10px 20px rgba(255,93,143,0.22);
        }
        .btn-login:hover {
            opacity: 0.95;
        }
        .back-link {
            display: inline-block;
            margin-top: 16px;
            color: var(--rose-dark);
            text-decoration: none;
            font-size: 0.9rem;
        }
        .alert {
            border-radius: 12px;
            font-size: 0.88rem;
        }

        @media (max-width: 768px) {
            body {
                padding: 12px;
                align-items: center;
                justify-content: center;
            }
            .card-login {
                width: 100%;
                max-width: 280px;
                padding: 14px 12px;
            }
            .photo-card {
                border-radius: 14px;
                border: 1px solid rgba(255,255,255,0.6);
            }
        }
    </style>
</head>
<body>
    <div class="photo-burst" aria-hidden="true">
        <?php foreach ($photoFiles as $index => $file): ?>
            <?php
                $positions = [
                    ['left' => '1%', 'top' => '2%', 'w' => 85, 'h' => 105, 'r' => -8],
                    ['left' => '32%', 'top' => '1%', 'w' => 85, 'h' => 105, 'r' => 6],
                    ['left' => '80%', 'top' => '3%', 'w' => 85, 'h' => 105, 'r' => -5],
                    ['left' => '1%', 'top' => '28%', 'w' => 85, 'h' => 105, 'r' => 5],
                    ['left' => '32%', 'top' => '30%', 'w' => 85, 'h' => 105, 'r' => -6],
                    ['left' => '80%', 'top' => '28%', 'w' => 85, 'h' => 105, 'r' => 7],
                    ['left' => '1%', 'top' => '54%', 'w' => 85, 'h' => 105, 'r' => -4],
                    ['left' => '32%', 'top' => '56%', 'w' => 85, 'h' => 105, 'r' => 8],
                    ['left' => '80%', 'top' => '54%', 'w' => 85, 'h' => 105, 'r' => -7],
                    ['left' => '1%', 'top' => '80%', 'w' => 85, 'h' => 105, 'r' => 4],
                    ['left' => '32%', 'top' => '82%', 'w' => 85, 'h' => 105, 'r' => -5],
                    ['left' => '80%', 'top' => '80%', 'w' => 85, 'h' => 105, 'r' => 6],
                ];
                $pos = $positions[$index % count($positions)];
                $delay = ($index % 6) * 0.5 . 's';
                $duration = (9 + ($index % 4) * 1.2) . 's';
            ?>
            <div class="photo-card"
                style="left: <?= $pos['left'] ?>; top: <?= $pos['top'] ?>; width: <?= $pos['w'] ?>px; height: <?= $pos['h'] ?>px; background-image: url('<?= base_url('assets/img/' . $file) ?>'); --rotate: <?= $pos['r'] ?>deg; --delay: <?= $delay ?>; --duration: <?= $duration ?>;"></div>
        <?php endforeach; ?>
    </div>

    <div class="card-login">
        <div class="heart"></div>
        <h3 class="login-title">Selamat Datang, Sayang</h3>
        <p class="login-subtitle">Masuk untuk melihat momen paling istimewa hari ini</p>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger py-2 px-3 mb-3" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success py-2 px-3 mb-3" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login/auth') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?= old('username') ?>" required placeholder="Masukkan username" autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="text-center">
            <a href="<?= base_url('ulangtahun') ?>" class="back-link">Lihat halaman khusus</a>
        </div>
    </div>
</body>
</html>