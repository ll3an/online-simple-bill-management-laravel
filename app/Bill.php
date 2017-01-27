<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     * A Bill belongs to a customer
     * @return belongsTo Customer
     */
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    /**
     * A bill instance can have multiple payments associated with it
     * @return hasMany payments
     */
    public function payments()
    {
    	return $this->hasMany('App\Payment');
    }
}
