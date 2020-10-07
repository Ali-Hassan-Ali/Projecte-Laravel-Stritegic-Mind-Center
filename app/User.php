<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function teacher()
    {
        return $this->hasOne(Teacher::class);

    }//end fo teacher

    protected $fillable = ['name', 'email', 'password','image'];

    protected $hidden = ['password', 'remember_token',];

    protected $casts = ['email_verified_at' => 'datetime',];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);
    }//end of get image path

    public function student()
    {
        return $this->hasMany(Student::class);
    }//end fo student

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }//end fo comment

    public function Calender()
    {
        return $this->hasMany(Calender::class);
    }//end fo calender

}//end of model
