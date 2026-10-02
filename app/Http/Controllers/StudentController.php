<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name'  => 'Wahyudi',
                'major' => 'Informatika',
                'age'   => 22,
                'courses' => ['Pemerograman Web', 'Basis Data', 'Jaringan Komputer'],
            ],
            [
                'name' => 'Jane Smith',
                'major' => 'Mathematics',
                'age'   => 22,
                'courses' => ['Calculus', 'Algebra', 'Statistics']
            ],
        ];

        return view('students.index', compact('students'));
    }
}
