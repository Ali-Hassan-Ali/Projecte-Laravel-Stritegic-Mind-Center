<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','image','class_rooms_id','text'];

//    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);
    }//end of get image path

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');

    }//end fo user

    public function ClassRoom()
    {
        return $this->belongsTo(ClassRoom::class,'class_rooms_id');

    }//end fo ClassRoom

}//end of model
