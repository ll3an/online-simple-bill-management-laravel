<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	/**
	 * customer has many bills
	 * @return hasMany relation object
	 */
    public function bills()
    {
    	return $this->hasMany('App\Bill');
    }

    /**
     * customer has many payments
     * @return hasMany relation object
     */
    public function payments()
    {
    	return $this->hasMany('App\Payment');
    }
}
