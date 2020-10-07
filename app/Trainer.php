<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['image','name','description'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/trainer_images/' . $this->image);
    }//end of get image path

}//end of model
