<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nur Fadhil Ramadhan',
            'title' => 'UI/UX Designer | Storyteller | Penulis Novel',
            'university' => 'Mahasiswa Teknik Elektro Konsentrasi Software Engineering @ Universitas Negeri Makassar',
            'quote' => 'Menggabungkan empati desain dengan kekuatan storytelling',
            'profile_image' => 'images/profile.jpg',
            'social_media' => [
                'instagram' => 'https://instagram.com/yourprofile',
                'linkedin' => 'https://linkedin.com/in/yourprofile',
                'github' => 'https://github.com/yourprofile',
            ]
        ];

        return view('welcome', compact('data'));
    }
}