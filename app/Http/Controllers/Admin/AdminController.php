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
    public function dashboard(Request $request)
    {
        $studentsCount = User::where('role', 'student')->count();
        $teachers = User::where('role', 'teacher')->get();
        $getAllUsers = User::all();
        $courses = Course::all();
        $coursesCount = Course::count();
        $categoriesCount = Category::count();
        $categories = Category::all();
        $enrollmentsCount = Enrollment::count();

        $latestCourses = Course::latest()
            ->take(5)
            ->get();

        $latestEnrollments = Enrollment::orderBy('enrolled_at', 'desc')
        ->with(['user', 'course'])
        ->take(5)
        ->get()
        ->transform(function ($enrollment) {
            $enrollment->enrolled_at_jalali = Jalalian::fromDateTime($enrollment->enrolled_at)
            ->format('Y/m/d');

            return $enrollment;
        });

        $search = $request->input('search');
        $role = $request->input('role');

        $users = User::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when($role, function ($query, $role) {
                $query->where('role', $role);
            })
            ->get();

        return view('adminDashboard', compact(
            'studentsCount',
            'coursesCount',
            'categoriesCount',
            'enrollmentsCount',
            'latestCourses',
            'latestEnrollments',
            'getAllUsers',
            'users',
            'categories',
            'teachers',
            'courses',
        ));
    }
}
