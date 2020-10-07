<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','category_id'];

    public function student()
    {
        return $this->hasMany(Student::class);

    }//end fo student

    public function file()
    {
        return $this->hasMany(File::class);

    }//end fo file

    public function classroom()
    {
        return $this->hasMany(ClassRoom::class);

    }//end fo classroom

    public function teacher()
    {
        return $this->hasMany(Teacher::class);

    }//end fo teacher

    public function category()
    {
        return $this->belongsTo(Category::class);

    }//end fo category

}//end of model
