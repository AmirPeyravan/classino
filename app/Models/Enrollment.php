<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function course()
    {
        return $this->belongsTo(Course::class);
    }

}
