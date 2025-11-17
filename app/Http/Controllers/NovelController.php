<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $novels = [
            [
                'id' => 1,
                'slug' => 'jejak-langkah-waktu',
                'title' => 'Jejak Langkah Waktu',
                'cover' => 'images/novels/jejak-langkah.jpg',
                'genre' => 'Fantasy, Romance',
                'status' => 'Ongoing',
                'chapters' => 15,
                'synopsis' => 'Kisah tentang seorang pemuda yang menemukan kemampuan untuk melihat masa lalu...',
                'rating' => 4.7,
                'views' => 15420
            ],
            [
                'id' => 2,
                'slug' => 'cahaya-di-ujung-jalan',
                'title' => 'Cahaya di Ujung Jalan',
                'cover' => 'images/novels/cahaya.jpg',
                'genre' => 'Drama, Slice of Life',
                'status' => 'Completed',
                'chapters' => 48,
                'synopsis' => 'Perjalanan hidup seorang gadis dalam mencari jati dirinya...',
                'rating' => 4.9,
                'views' => 28350
            ],
        ];

        $genres = ['All', 'Fantasy', 'Romance', 'Drama'];

        return view('website_portofolio.novel', [
            'novels' => $novels,
            'genres' => $genres
        ]);
    }
}