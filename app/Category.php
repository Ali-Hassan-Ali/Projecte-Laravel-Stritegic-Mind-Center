<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function course()
    {
        return $this->hasMany(Course::class);

    }//end fo course

}//end of model
