<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $berita = Post::latest()->get(); 
    return view('welcome', compact('berita'));
})->name('home');

Route::get('/berita/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();
    
    $terpopuler = Post::where('id', '!=', $post->id)
                      ->latest()
                      ->take(5)
                      ->get();

    return view('show', compact('post', 'terpopuler'));
})->name('berita.show');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (Request $request) {
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    Auth::login($user);
    return redirect('/');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/');
    }
    return back()->withErrors(['email' => 'Login gagal!']);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');