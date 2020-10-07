<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['image', 'text'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/slider_images/' . $this->image);
    }//end of get image path
}
