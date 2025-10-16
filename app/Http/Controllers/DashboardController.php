<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $availableBootcamps = [
            [
                'title' => 'Cyber Security',
                'desc' => 'Bootcamp 1 - Red Team & Blue Team',
                'price' => 2500000,
                'discount' => 899000,
                'image' => 'cyberSec.jpg'
            ],
            [
                'title' => 'Web Development',
                'desc' => 'Bootcamp 2 - Full Stack Developer',
                'price' => 2000000,
                'discount' => 799000,
                'image' => 'cyberSec.jpg'
            ]
        ];

        $availableCourses = [
            [
                'title' => 'UI/UX Design Fundamentals',
                'desc' => 'Pelajari dasar desain antarmuka dan pengalaman pengguna.',
                'image' => 'cyberSec.jpg'
            ],
            [
                'title' => 'Intro to Data Science',
                'desc' => 'Belajar pengolahan dan analisis data dari nol.',
                'image' => 'cyberSec.jpg'
            ]
        ];

        return view('dashboard.index', compact('availableBootcamps', 'availableCourses'));
    }

    public function bootcamp()
    {
        $myBootcamps = [
            [
                'title' => 'Cyber Security',
                'progress' => '50%',
                'status' => 'Sedang Berlangsung'
            ],
            [
                'title' => 'Web Development',
                'progress' => '100%',
                'status' => 'Selesai'
            ]
        ];

        return view('dashboard.bootcamp', compact('myBootcamps'));
    }

    public function course()
    {
        return view('dashboard.course');
    }

    public function sertifikat()
    {
        return view('dashboard.sertifikat');
    }

    public function transaksi()
    {
        return view('dashboard.transaksi');
    }
}
