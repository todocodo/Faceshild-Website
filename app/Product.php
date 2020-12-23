<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice() 
    {
        return money_format('$%1', $this->price / 100);
    }
}
