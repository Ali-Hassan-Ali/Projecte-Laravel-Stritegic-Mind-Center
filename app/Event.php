<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['image','name'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/event_images/' . $this->image);
    }//end of get image path

}//end of model
