<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
	protected $fillable = [
		'referred_by',
		'referred_to',
	];

    public function referredBy()
	{
		return $this->belongsTo(User::class, 'referred_by');
	}

	public function referredTo()
	{
		return $this->belongsTo(User::class, 'referred_to');
	}
}
