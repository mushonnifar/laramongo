<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Car extends Eloquent {

    protected $connection = 'mongodb';
    protected $collection = 'car';
    protected $fillable = ['carcompany', 'model', 'price'];

}
