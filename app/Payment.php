<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * a payment belongs to a bill
     * @return belongsTo Bill
     */
    public function bill()
    {
    	return $this->belongsTo('App\Bill');
    }
}
