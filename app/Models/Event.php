<?php

namespace App\Models;
use App\Models\category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function getPrice()
    {
    $price = $this->price / 100;

    return number_format($price ,  2 ,'.' .' ');
}

public function categories()
{
    //an event can have many categories
return $this->belongsToMany('App\Models\Event');
}
}
