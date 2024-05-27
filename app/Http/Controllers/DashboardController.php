<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index()
    {
        // $totalStudent = Student::count();
        // $totalLesson = Lesson::count();

        return view('dashboard.layouts.home', [
            // 'totalStudent' => $totalStudent,
            // 'totalLesson' => $totalLesson
        ]);
    }
}
