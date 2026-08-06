<?php
$namaPacar = 'Sayang';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun, <?= htmlspecialchars($namaPacar, ENT_QUOTES, 'UTF-8') ?></title>
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
            --shadow: rgba(193, 53, 111, 0.22);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
            background:
                linear-gradient(135deg, rgba(255,245,248,0.88), rgba(255,240,246,0.82)),
                url('<?= base_url('assets/img/kita.jpg') ?>') center/cover fixed;
        }
        body::before, body::after {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
        }
        body::before {
            background-image: radial-gradient(circle at 20% 20%, rgba(255, 93, 143, 0.16) 0 10px, transparent 11px), radial-gradient(circle at 80% 15%, rgba(255, 143, 163, 0.16) 0 9px, transparent 10px);
            background-size: 180px 180px, 220px 220px;
            animation: drift 10s linear infinite;
        }
        body::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='50' font-size='36' text-anchor='middle'%3E💖%3C/text%3E%3C/svg%3E");
            opacity: 0.08;
            background-size: 140px 140px;
            filter: blur(1px);
        }
        @keyframes drift { from { transform: translateY(0); } to { transform: translateY(20px); } }
        .hero { min-height: 100vh; display: grid; place-items: center; padding: 24px; position: relative; z-index: 1; }
        .card { width: min(1040px, 100%); background: rgba(255,255,255,0.86); backdrop-filter: blur(12px); border: 1px solid rgba(255,93,143,0.18); border-radius: 32px; box-shadow: 0 24px 70px var(--shadow); padding: 28px; position: relative; overflow: hidden; z-index: 2; }
        .card::before { content: ""; position: absolute; inset: -30% 60% auto auto; width: 280px; height: 280px; background: radial-gradient(circle, rgba(255,143,163,0.22) 0%, transparent 70%); pointer-events: none; }
        .content { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 24px; align-items: center; }
        .badge { display: inline-flex; align-items: center; gap: 8px; padding: 8px 14px; border-radius: 999px; background: linear-gradient(135deg, var(--rose), var(--pink)); color: white; font-size: 0.9rem; font-weight: 600; letter-spacing: 0.04em; box-shadow: 0 8px 20px rgba(255,93,143,0.22); }
        h1 { margin: 16px 0 8px; font-family: 'Great Vibes', cursive; font-size: clamp(2.2rem, 4.5vw, 3.4rem); color: var(--rose-dark); }
        .subtitle { font-size: 1rem; margin: 0 0 18px; line-height: 1.7; }
        .quote { background: linear-gradient(135deg, rgba(255,245,248,0.95), rgba(255,240,246,0.9)); border-left: 4px solid var(--rose); border-radius: 16px; padding: 16px 18px; margin: 18px 0 22px; font-style: italic; line-height: 1.8; }
        .countdown { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; margin: 18px 0 22px; }
        .count-box { background: linear-gradient(135deg, #fff7fb, #ffeef4); border: 1px solid rgba(255,93,143,0.15); border-radius: 16px; padding: 12px 8px; text-align: center; box-shadow: inset 0 1px 0 rgba(255,255,255,0.8); }
        .count-box strong { display: block; font-size: 1.2rem; color: var(--rose-dark); }
        .count-box span { font-size: 0.76rem; color: #8a5f72; text-transform: uppercase; letter-spacing: 0.08em; }
        .photo-wrap { border-radius: 24px; overflow: hidden; box-shadow: 0 16px 40px rgba(193,53,111,0.18); border: 1px solid rgba(255,93,143,0.16); }
        .photo-wrap img { display: block; width: 100%; height: 100%; object-fit: cover; min-height: 320px; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 22px; }
        .btn { text-decoration: none; padding: 12px 16px; border-radius: 999px; font-weight: 600; transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .btn:hover { transform: translateY(-1px); }
        .btn-primary { background: linear-gradient(135deg, var(--rose), var(--rose-dark)); color: white; box-shadow: 0 10px 24px rgba(255,93,143,0.22); }
        .btn-secondary { background: white; color: var(--rose-dark); border: 1px solid rgba(255,93,143,0.22); }
        .letter { margin-top: 24px; padding: 18px; border-radius: 20px; background: rgba(255,247,251,0.95); border: 1px dashed rgba(255,93,143,0.25); line-height: 1.8; }
        .letter h2 { margin: 0 0 8px; font-size: 1.1rem; color: var(--rose-dark); }
        .music-toggle { position: fixed; top: 16px; right: 16px; z-index: 5; border: 0; background: rgba(255,255,255,0.9); color: var(--rose-dark); padding: 10px 14px; border-radius: 999px; box-shadow: 0 10px 20px rgba(193,53,111,0.16); cursor: pointer; font-weight: 600; }
        .confetti-layer, .flower-layer { position: fixed; inset: 0; pointer-events: none; overflow: hidden; z-index: 1; }
        .confetti { position: absolute; width: 10px; height: 16px; border-radius: 2px; animation: confettiFall linear forwards; opacity: 0; }
        .petal { position: absolute; font-size: 1.1rem; animation: petalFall linear infinite; opacity: 0.8; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15)); }
        @keyframes confettiFall { 0% { transform: translate3d(0, -20vh, 0) rotate(0deg); opacity: 0; } 10% { opacity: 1; } 100% { transform: translate3d(var(--drift-x), 110vh, 0) rotate(720deg); opacity: 0; } }
        @keyframes petalFall { 0% { transform: translate3d(0, -20vh, 0) rotate(0deg); opacity: 0; } 10% { opacity: 1; } 100% { transform: translate3d(var(--drift-x), 110vh, 0) rotate(360deg); opacity: 0; } }
        @media (max-width: 900px) { .content { grid-template-columns: 1fr; } }
        @media (max-width: 700px) { .card { padding: 24px; } .countdown { grid-template-columns: repeat(2, minmax(0, 1fr)); } .actions { flex-direction: column; } .btn { text-align: center; } }
    </style>
</head>
<body>
    <button class="music-toggle" id="musicToggle">🎵 Putar Musik</button>
    <div class="confetti-layer" id="confettiLayer"></div>
    <div class="flower-layer" id="flowerLayer"></div>
    <audio id="bgMusic" loop preload="auto">
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3" type="audio/mpeg">
    </audio>
    <main class="hero">
        <section class="card">
            <div class="content">
                <div>
                    <div class="badge">🎂 Selamat Ulang Tahun</div>
                    <h1>Untuk <?= htmlspecialchars($namaPacar, ENT_QUOTES, 'UTF-8') ?>, my love</h1>
                    <p class="subtitle">
                        Hari yang paling spesial akan segera datang. Tanggal 10 Agustus sudah dekat, dan aku ingin kamu tahu bahwa setiap detiknya, aku terus mengharapkan kebahagiaanmu.
                    </p>
                    <div class="countdown" id="countdown">
                        <div class="count-box"><strong id="days">00</strong><span>Hari</span></div>
                        <div class="count-box"><strong id="hours">00</strong><span>Jam</span></div>
                        <div class="count-box"><strong id="minutes">00</strong><span>Menit</span></div>
                        <div class="count-box"><strong id="seconds">00</strong><span>Detik</span></div>
                    </div>
                    <div class="quote">
                        “Semoga setiap langkahmu selalu dipenuhi kasih sayang, setiap doamu dikabulkan, dan setiap mimpi yang kamu punya semakin dekat untuk menjadi kenyataan.”
                    </div>
                    <div class="actions">
                        <a href="#surat" class="btn btn-primary">Buka surat kecil</a>
                        <a href="https://wa.me/?text=Selamat%20ulang%20tahun%20sayang%2C%20semoga%20bahagia%20selalu%20%F0%9F%92%9E" class="btn btn-secondary">Kirim ucapan</a>
                    </div>
                </div>
                <div class="photo-wrap">
                    <img src="<?= base_url('assets/img/kita.jpg') ?>" alt="Foto romantis untuk ulang tahun" loading="lazy">
                </div>
            </div>
            <div id="surat" class="letter">
                <h2>Surat untukmu</h2>
                <p>
                    Aku ingin kamu tahu bahwa kamu adalah bagian yang sangat istimewa dalam hidupku. Hari ini bukan hanya tentang bertambahnya umur, tetapi juga tentang betapa berartinya kamu bagi orang-orang di sekelilingmu. Semoga semua impianmu terwujud, semua doamu dikabulkan, dan hari-harimu selalu dipenuhi ketenangan serta cinta.
                </p>
                <p>
                    Terima kasih sudah menjadi sosok yang membuat hidup ini terasa lebih hangat, lebih indah, dan lebih bermakna. Selamat ulang tahun, sayang. Aku sayang kamu lebih dari yang bisa aku ungkapkan dengan kata-kata.
                </p>
            </div>
        </section>
    </main>
    <script>
        function getNextBirthday() {
            const now = new Date();
            let target = new Date(now.getFullYear(), 7, 10, 0, 0, 0);
            if (target < now) {
                target = new Date(now.getFullYear() + 1, 7, 10, 0, 0, 0);
            }
            return target;
        }

        function updateCountdown() {
            const target = getNextBirthday();
            const now = new Date();
            const diff = target - now;
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);

            document.getElementById('days').textContent = String(days).padStart(2, '0');
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        function createConfetti() {
            const layer = document.getElementById('confettiLayer');
            const colors = ['#ff5d8f', '#ff8fa3', '#ffd6e0', '#ffffff'];
            for (let i = 0; i < 40; i++) {
                const piece = document.createElement('span');
                piece.className = 'confetti';
                piece.style.left = `${Math.random() * 100}%`;
                piece.style.top = '-10px';
                piece.style.background = colors[Math.floor(Math.random() * colors.length)];
                piece.style.setProperty('--drift-x', `${(Math.random() - 0.5) * 220}px`);
                piece.style.animationDuration = `${3 + Math.random() * 3}s`;
                piece.style.animationDelay = `${Math.random() * 2}s`;
                layer.appendChild(piece);
            }
        }

        function createPetals() {
            const layer = document.getElementById('flowerLayer');
            const petals = ['❀', '✿', '🌸'];
            for (let i = 0; i < 20; i++) {
                const petal = document.createElement('span');
                petal.className = 'petal';
                petal.textContent = petals[Math.floor(Math.random() * petals.length)];
                petal.style.left = `${Math.random() * 100}%`;
                petal.style.top = `${Math.random() * 100}%`;
                petal.style.setProperty('--drift-x', `${(Math.random() - 0.5) * 180}px`);
                petal.style.animationDuration = `${8 + Math.random() * 8}s`;
                petal.style.animationDelay = `${Math.random() * 4}s`;
                layer.appendChild(petal);
            }
        }

        const musicToggle = document.getElementById('musicToggle');
        const music = document.getElementById('bgMusic');
        musicToggle.addEventListener('click', async () => {
            try {
                if (music.paused) {
                    await music.play();
                    musicToggle.textContent = '🔈 Musik Aktif';
                } else {
                    music.pause();
                    musicToggle.textContent = '🎵 Putar Musik';
                }
            } catch (error) {
                musicToggle.textContent = '🎵 Putar Musik';
            }
        });

        updateCountdown();
        createConfetti();
        createPetals();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>