<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('Home');

});

Route::get('/profile', function () {
    return view ('Profile',[
        "title" => "Profile",
        "nama" => "Midda Restia",
        "lulusan" => "UGM",
        "foto" => "img/midda.png",
        "ttl" => "16 Desember 2005",

    ]);
});

Route::get('/berita', function () {
    $data_berita =[

        [
            "judul" => "Berita 1",
            "penulis" => "Ilham",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem aperiam fugit voluptate blanditiis sapiente ut cupiditate consequatur similique amet autem, excepturi cum? Aspernatur numquam itaque, perferendis aliquid praesentium tempora eveniet?", 
            
        ],
        
        [
            "judul" => "Berita 2",
            "penulis" => "Yono",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem aperiam fugit voluptate blanditiis sapiente ut cupiditate consequatur similique amet autem, excepturi cum? Aspernatur numquam itaque, perferendis aliquid praesentium tempora eveniet?", 
            
        ],
        
        [
            "judul" => "Berita 3",
            "penulis" => "Alex",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem aperiam fugit voluptate blanditiis sapiente ut cupiditate consequatur similique amet autem, excepturi cum? Aspernatur numquam itaque, perferendis aliquid praesentium tempora eveniet?", 
            
        ]

    ];
    return view ('Berita',[
        "title" => "Berita",
        "beritas" => $data_berita,

    ]);
  
});

Route::get('/contact', function () {
    return view ('Contact');
    // "title" => "Contact",
});

