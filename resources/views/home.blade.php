@extends('layouts.main')

@section('content')
<!-- Hero Section -->
  <div style="display:flex; justify-content:space-between; align-items:center; min-height:90vh; padding:60px;">
    <!-- Text Content -->
    <div style="max-width:50%;">
      <h1 style="color:#8e44ad; font-size:48px; margin:0;">PORTOFOLIO</h1>
      <p style="margin-top:20px; color:#ccc; line-height:1.6;">
        Halo, saya Ferhat. Seorang lulusan IT yang memiliki minat besar dalam dunia teknologi dan pengembangan aplikasi. 
        Berpengalaman dalam pemrograman, pengembangan web, serta selalu antusias untuk belajar teknologi terbaru.
      </p>

     <a href="/contact">
  <button style="margin-top:20px; padding:12px 24px; background-color:#8e44ad; border:none; border-radius:5px; font-weight:bold; cursor:pointer; color:white;">
    Let's Connect
  </button>
</a>

    </div>

    <!-- Profile Image -->
    <div style="width:300px; height:300px; border-radius:50%; overflow:hidden; border:3px solid #8e44ad; box-shadow:0 0 30px #8e44ad;">
      <img src="https://i.pinimg.com/736x/f6/17/45/f617459e6490f5a0321f52f85b09729a.jpg" alt="Profile" style="width:100%; height:100%; object-fit:cover;">
    </div>
  </div>
    @endsection
