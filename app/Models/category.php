<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function events()
    {

    //many categories can have one or many events
        return $this->belongsToMany('App\Models\Event');

}
}
