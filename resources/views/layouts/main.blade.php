<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
</head>
<body style="margin:0; font-family:Arial, sans-serif; background:linear-gradient(to bottom, #000000, #2c2c2c); color:white;">

  <!-- Navbar -->
  <div style="display:flex; justify-content:space-between; align-items:center; padding:15px 40px; background-color:#0a0a0a;">
    <h2 style="color:#8e44ad; margin:0;">F</h2>
    <div>
      <a href="{{ url('/') }}" style="color:#fff; margin:0 15px; text-decoration:none;">Home</a>
      <a href="/profile" style="color:#fff; margin:0 15px; text-decoration:none;">Profile</a>
      <a href="/contact" style="color:#fff; margin:0 15px; text-decoration:none;">Contact</a>
      <a href="/berita" style="color:#fff; margin:0 15px; text-decoration:none;">Berita</a>
    </div>
  </div>
  <div class="container mt-4">
    @yield('content')
  </div>

   <!-- FOOTER (masuk di 1 layar) -->
  <footer >
    © {{ date('Y') }} Ferhat
  </footer>
  

</body>
</html>
