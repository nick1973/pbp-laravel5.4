<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    protected $fillable = ['item','price','amount'];
}
