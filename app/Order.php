<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'billing_first_name', 'billing_last_name', 'billing_phone', 'billing_email', 'billing_company',
        'billing_country', 'billing_city', 'billing_address', 'billing_postal_code', 'billing_name_on_card',
        'billing_subtotal', 'billing_tax', 'billing_total', 'payment_gateway', 'shipped', 'error',
    ];

    public function products() 
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
