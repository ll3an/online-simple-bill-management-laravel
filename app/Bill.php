<?php

namespace App;

use App\Payment;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	protected $fillable = ['customer_id', 'bill_number', 'amount', 'created_at'];
	/**
	 * sums up all the paid amount for a specific bill
	 * @return float total paid amount
	 */
	public function getTotalPaidAttribute()
	{
		$total = 0;
		$payments = Payment::where('bill_id', $this->id)->get();
		foreach ($payments as $payment) {
			$total += $payment->amount;
		}
		return $total;
	}

	/**
	 * subtracts total paid amount from Bill amount
	 * @return float total due
	 */
	public function getTotalDueAttribute()
	{
		return $this->amount - $this->getTotalPaidAttribute();
	}

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
