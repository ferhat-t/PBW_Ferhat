<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Ferhat</title>
</head>
<body style="margin:0; font-family:Arial, sans-serif; background:linear-gradient(180deg, #000000, #1a1a1a); color:#f0f0f0;">

  <!-- NAVBAR -->
  <nav style="background:#0d0d0d; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; position:sticky; top:0;">
    <div style="color:#a020f0; font-weight:bold; font-size:20px;">F</div>
    <div>
      <a href="{{ url('/') }}" style="color:#fff; margin:0 15px; text-decoration:none;">Home</a>
      <a href="/profile" style="color:#fff; margin:0 15px; text-decoration:none;">Profile</a>
      <a href="/contact" style="color:#fff; margin:0 15px; text-decoration:none;">Contact</a>
      <a href="/berita" style="color:#fff; margin:0 15px; text-decoration:none;">Berita</a>
    </div>
  </nav>

  <!-- PROFILE SECTION -->
  <section style="padding:60px 24px;">
    <div style="max-width:1000px; margin:0 auto; display:flex; flex-wrap:wrap; gap:40px; align-items:center;">

      <!-- Foto Profil -->
      <div style="flex:0 0 300px; height:300px; border-radius:50%; overflow:hidden; border:3px solid #a020f0; box-shadow:0 0 25px #a020f0;">
        <img src="https://i.pinimg.com/736x/f6/17/45/f617459e6490f5a0321f52f85b09729a.jpg" alt="Foto Ferhat" style="width:100%; height:100%; object-fit:cover;">
      </div>

      <!-- Biodata -->
      <div style="flex:1; min-width:300px;">
        <h1 style="color:#a020f0; font-size:36px; margin-bottom:20px;">Profile</h1>
        <p><strong>Nama:</strong> Ferhat</p>
        <p><strong>Lulusan:</strong> Universitas Muhammadiyah Semarang</p>
        <p><strong>Tanggal Lahir:</strong> 31 Mei 2005</p>
        <p style="margin-top:20px; line-height:1.6; color:#ccc;">
          Saya adalah seorang lulusan IT yang memiliki minat besar dalam dunia teknologi, pemrograman, dan pengembangan aplikasi. 
          Memiliki pengalaman dalam membangun aplikasi berbasis web, mengelola database, serta antusias dalam mempelajari teknologi terbaru.
        </p>
      </div>

    </div>
  </section>

  <!-- Pengalaman -->
  <section style="padding:40px 24px;">
    <div style="max-width:1000px; margin:0 auto; background:#1f1a22; padding:20px; border-radius:12px; box-shadow:0 0 15px rgba(160,32,240,0.4);">
      <h2 style="color:#dcd0e9; margin-top:0;">Pengalaman & Keahlian</h2>
      <ul style="margin:0; padding-left:20px; line-height:1.8; color:#ddd;">
        <li>Pengembangan Web (HTML, CSS, JavaScript, PHP, Laravel)</li>
        <li>Manajemen Database (MySQL, PostgreSQL, MongoDB)</li>
        <li>Jaringan & Keamanan Sistem</li>
        <li>Pengembangan Aplikasi & Problem Solving</li>
      </ul>
    </div>
  </section>

  <!-- FOOTER -->
  <footer style="padding:20px; text-align:center; color:#aaa; border-top:1px solid rgba(255,255,255,0.05);">
    © {{ date('Y') }} Ferhat - Profile Page
  </footer>

</body>
</html>
