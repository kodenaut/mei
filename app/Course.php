<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ([
        'name',
        'qualification',
        'duration',
        'modules',
        'exam_body',
        'mode',
        'school_id',
    ]);

    public function school(){
        return $this->belongsTo('App\School');
    }
}


