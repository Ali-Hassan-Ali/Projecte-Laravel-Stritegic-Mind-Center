<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name_book','description','file','teachers_id','courses_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teachers_id');

    }//end fo teacher

    public function course()
    {
        return $this->belongsTo(Course::class,'courses_id');

    }//end fo course

}//end of model
