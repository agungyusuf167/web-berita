<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Fungsi untuk halaman depan (Welcome)
    public function index()
    {
        $berita = Post::latest()->get();
        return view('welcome', compact('berita'));
    }

    // Fungsi untuk halaman detail (Baca Selengkapnya)
    public function show($slug)
    {
        // Mencari berita berdasarkan slug, kalau tidak ada muncul 404
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // Ambil berita terbaru untuk sidebar (opsional)
        $berita = Post::latest()->take(5)->get();

        return view('show', compact('post', 'berita'));
    }
}