<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function practices()
    {
        return $this->hasMany('App\Practice');
    }

    protected $fillable = [
        'age_type', 'lessons_time_type', 'week_type', 'capacity_person', 'capacity_difficulty_point'
    ];
}
