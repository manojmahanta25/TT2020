<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable =[
        'rid','name','gender','phone'
    ];
}
