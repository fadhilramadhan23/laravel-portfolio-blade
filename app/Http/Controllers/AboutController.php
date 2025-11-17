<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = [
            'bio' => 'Saya adalah seorang UI/UX Designer dan Penulis Novel yang passionate dalam menciptakan pengalaman digital yang bermakna.',
            'skills' => [
                'UI/UX Design' => 90,
                'Figma' => 95,
                'Laravel' => 85,
                'React' => 80,
                'Creative Writing' => 88,
            ],
            'experience' => [
                [
                    'title' => 'UI/UX Designer',
                    'company' => 'Company Name',
                    'period' => '2023 - Present',
                    'description' => 'Mendesain interface untuk aplikasi mobile dan web'
                ],
            ]
        ];

        return view('about', compact('about'));
    }
}