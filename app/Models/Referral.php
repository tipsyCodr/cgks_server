<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
   protected $fillable = [
    'referred_by',
    'referred_to',
   ];

}
