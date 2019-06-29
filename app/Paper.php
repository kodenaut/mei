<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    //
    protected $fillable = ([
        'title',
        'file',
        'course_id',
    ]);

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
