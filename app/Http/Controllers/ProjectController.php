<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-Commerce Mobile App',
                'category' => 'UI/UX Design',
                'description' => 'Desain aplikasi mobile untuk e-commerce fashion',
                'image' => 'images/projects/ecommerce.jpg',
                'tools' => ['Figma', 'Adobe XD'],
                'year' => 2024
            ],
            [
                'id' => 2,
                'title' => 'Smart Home Dashboard',
                'category' => 'UI/UX Design',
                'description' => 'Dashboard untuk mengontrol smart home devices',
                'image' => 'images/projects/smarthome.jpg',
                'tools' => ['Figma', 'Framer'],
                'year' => 2024
            ],
        ];

        $categories = ['All', 'UI/UX Design', 'Web Development'];

        return view('website_portofolio.project', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $project = [
            'id' => $id,
            'title' => 'E-Commerce Mobile App',
            'description' => 'Desain aplikasi mobile untuk e-commerce fashion',
            'image' => 'images/projects/ecommerce.jpg',
            'tools' => ['Figma', 'Adobe XD'],
        ];

        return view('website_portofolio.project-detail', compact('project'));
    }
}