<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class DashboardController extends Controller
{
    public function index()
    {
        $courses = [
            (object)[
                'title' => 'Laravel Basics',
                'description' => 'Belajar dasar framework Laravel untuk membuat web.',
                'image' => 'laravel.jpg'
            ],
            (object)[
                'title' => 'Bootstrap Mastery',
                'description' => 'Pelajari cara membuat tampilan modern dengan Bootstrap.',
                'image' => 'bootstrap.jpg'
            ],
        ];

        return view('dashboard', compact('courses'));
    }

}
