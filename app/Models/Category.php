<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $guarded = [];

    protected $fillable = [
        'name'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
