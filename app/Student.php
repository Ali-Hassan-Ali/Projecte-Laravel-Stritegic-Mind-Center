<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['active','full_name','image','age','description','collage','users_id','courses_id'];

    protected $appends = ['image_path'];

    public function course()
    {
        return $this->belongsTo(Course::class,'courses_id');
    }//end fo course
//
    public function user()
    {
        return $this->belongsTo(User::class,'users_id');

    }//end fo user

    public function getImagePathAttribute()
    {
        return asset('uploads/student_images/' . $this->image);

    }//end of get image path

}//end of model
