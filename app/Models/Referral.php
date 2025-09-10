<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
   protected $fillable = [
    'user_id',
    'referred_by',
    'referred_to',
   ];

}
