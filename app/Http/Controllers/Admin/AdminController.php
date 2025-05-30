<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Enrollment;

class AdminController extends Controller
{
    public function dashboard()
    {

    $studentsCount = User::where('role', 'student')
        ->count();
    $coursesCount = Course::count();
    $categoriesCount = Category::count();
    $enrollmentsCount = Enrollment::count();

    return view('adminDashboard', compact(
        'studentsCount', 'coursesCount', 'categoriesCount', 'enrollmentsCount'
    ));

    }
}

