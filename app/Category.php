<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function arts()
    {
        return $this->hasMany('App\Art');
    }
}
