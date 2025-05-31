<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Enrollment;
use Morilog\Jalali\Jalalian;


class AdminController extends Controller
{
public function dashboard()
{
    $studentsCount = User::where('role', 'student')->count();
    $coursesCount = Course::count();
    $categoriesCount = Category::count();
    $enrollmentsCount = Enrollment::count();

    $latestCourses = Course::latest()
        ->take(5)
        ->get();

    $latestEnrollments = Enrollment::orderBy('enrolled_at', 'desc')
        ->with(['user', 'course'])
        ->take(5)
        ->get()
        ->transform(function ($enrollment) {
            $enrollment->enrolled_at_jalali = Jalalian::fromDateTime($enrollment->enrolled_at)->format('Y/m/d');
            return $enrollment;
        });

    return view('adminDashboard', compact(
        'studentsCount',
        'coursesCount',
        'categoriesCount',
        'enrollmentsCount',
        'latestCourses',
        'latestEnrollments'
    ));
}

}
