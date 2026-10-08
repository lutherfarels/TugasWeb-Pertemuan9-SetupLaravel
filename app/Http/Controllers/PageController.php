<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class PageController extends Controller
{
    public function home()
    {
        $profile = [
            'nama' => 'Farel Luther Siagian',
            'jurusan' => 'Ilmu Komputer',
            'kampus' => 'Universitas Negeri Medan'
        ];

        return view('home', compact('profile'));
    }

    public function about()
    {
        $profile = [
            'nama' => 'Farel Luther Siagian',
            'jurusan' => 'Ilmu Komputer',
            'kampus' => 'Universitas Negeri Medan'
        ];

        return view('about', compact('profile'));
    }

    public function contact()
    {
        return view('contact');
    }
}