<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = [
            'email' => 'fadhil@example.com',
            'phone' => '+62 812-3456-7890',
            'location' => 'Makassar, Indonesia',
            'social_media' => [
                'instagram' => 'https://instagram.com/yourprofile',
                'linkedin' => 'https://linkedin.com/in/yourprofile',
                'github' => 'https://github.com/yourprofile',
            ],
            'availability' => 'Available for freelance projects'
        ];

        return view('website_portofolio.contact', compact('contact'));
    }
}