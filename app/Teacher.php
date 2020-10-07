<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\ClassRoom;

class Teacher extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }//end fo user

    protected $fillable = ['active','full_name','image','age','description','collage','users_id','courses_id'];

    protected $appends = ['image_path'];

    public function file()
    {
        return $this->hasMany(File::class);
    }//end fo file

    public function classroom()
    {
        return $this->hasMany(ClassRoom::class);
    }//end fo classroom

    public function course()
    {
        return $this->belongsTo(Course::class,'courses_id');

    }//end fo course

    public function getImagePathAttribute()
    {
        return asset('uploads/teacher_images/' . $this->image);

    }//end of get image path

}//end of model
