<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $guarded = [];

    public function enrollments()
{
    return $this->hasMany(Enrollment::class);
}

public function students()
{
    return $this->belongsToMany(User::class, 'enrollments');
}

public function lessons()
{
    return $this->hasMany(Lesson::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}

}
