<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Ferhat</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(180deg, #000000, #1a1a1a);
      color: #f0f0f0;
      height: 100vh;
      overflow: hidden; /* biar tidak bisa scroll */
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
      flex: 1; /* isi layar penuh minus navbar */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .contact-box {
      background: #1f1a22;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(160,32,240,0.4);
      text-align: left;
    }
    .contact-box p strong {
      color: #dcd0e9;
    }
    footer {
      text-align: center;
      color: #aaa;
      padding: 10px;
      font-size: 14px;
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

  <!-- CONTACT SECTION -->
  <section>
    <div>
      <h1 style="color:#a020f0; font-size:36px; margin-bottom:20px;">Contact</h1>
      <p style="color:#ccc; margin-bottom:40px;">
        Hubungi saya melalui informasi di bawah ini:
      </p>

      <div class="contact-box">
        <p><strong>Nomor Telepon:</strong> 08xx-xxxx-xxxx</p>
        <p><strong>Email:</strong> ferhat@example.com</p>
      </div>
    </div>
  </section>

  <!-- FOOTER (masuk di 1 layar) -->
  <footer>
    © {{ date('Y') }} Ferhat - Contact Page
  </footer>

</body>
</html>
