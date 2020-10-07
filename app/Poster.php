<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $fillable = ['image','status'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/poster_images/' . $this->image);
    }//end of get image path

}//end of model
