<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $fillable = ['image','description','users_id'];

    protected $appends = ['image_path'];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }/*end of users*/

    public function getImagePathAttribute()
    {
        return asset('uploads/calender_images/' . $this->image);
    }//end of get image path

}//end of model
