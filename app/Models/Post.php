<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Tambahkan ini di atas

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'category', 'content'];

    // Kode Sakti: Otomatis bikin slug saat simpan berita
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}