<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function lessons()
    {
        return $this->belongsTo('App\Lesson');
    }
}
