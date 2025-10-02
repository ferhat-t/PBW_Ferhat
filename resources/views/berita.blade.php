<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita - Ferhat</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(180deg, #000000, #1a1a1a);
      color: #f0f0f0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    nav {
      background: #0d0d0d;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
    }
    nav a.active {
      color: #a020f0;
      font-weight: bold;
    }
    section {
      flex: 1;
      padding: 40px;
    }
    h1 {
      color: #a020f0;
      font-size: 36px;
      margin-bottom: 30px;
    }
    .news-card {
      background: #1f1a22;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(160,32,240,0.3);
    }
    .news-card h2 {
      margin: 0 0 10px;
      color: #d5a6ff;
    }
    .news-card small {
      color: #aaa;
    }
    .news-card p {
      margin-top: 10px;
      line-height: 1.6;
      color: #ccc;
    }
    footer {
      text-align: center;
      color: #aaa;
      padding: 10px;
      font-size: 14px;
      border-top: 1px solid #222;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav>
    <div style="color:#a020f0; font-weight:bold; font-size:20px;">F</div>
    <div>
      <a href="{{ url('/') }}" style="color:#fff; margin:0 15px; text-decoration:none;">Home</a>
      <a href="/profile" style="color:#fff; margin:0 15px; text-decoration:none;">Profile</a>
      <a href="/contact" style="color:#fff; margin:0 15px; text-decoration:none;">Contact</a>
      <a href="/berita" style="color:#fff; margin:0 15px; text-decoration:none;">Berita</a>
    </div>
  </nav>

  <!-- BERITA SECTION -->
  <section>
    <h1>Berita Terbaru</h1>

    <div class="news-card">
      <h2>Peluncuran Website Portofolio Ferhat</h2>
      <small>02 Oktober 2025</small>
      <p>Ferhat merilis website portofolio baru yang menampilkan profil, pengalaman, serta keterampilan di bidang IT dengan tampilan modern dan elegan.</p>
    </div>

    <div class="news-card">
      <h2>Proyek Sistem Keamanan Jaringan</h2>
      <small>20 September 2025</small>
      <p>Ferhat mengembangkan sistem keamanan jaringan untuk melindungi data perusahaan dari ancaman siber, dengan implementasi firewall dan enkripsi terbaru.</p>
    </div>

    <div class="news-card">
      <h2>Pengembangan Aplikasi Web E-Learning</h2>
      <small>05 Agustus 2025</small>
      <p>Ferhat berkolaborasi dalam membangun aplikasi e-learning berbasis web menggunakan Laravel dan React untuk mendukung pembelajaran online.</p>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    © {{ date('Y') }} Ferhat - Berita Page
  </footer>

</body>
</html>
