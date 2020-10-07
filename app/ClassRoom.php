<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $fillable = ['courses_id','teachers_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teachers_id');

    }//end fo teacher

    public function course()
    {
        return $this->belongsTo(Course::class,'courses_id');

    }//end fo course

    public function comment()
    {
        return $this->hasMany(Comment::class);

    }//end fo comment

//    public function al()
//    {
//        return $this->append(Teacher::class,'courses_id' == ClassRoom::class,'courses_id');
//
//    }//end fo teacher

}/*end of model*/
