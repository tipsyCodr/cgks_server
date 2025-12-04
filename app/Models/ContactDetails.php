<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
   protected $fillable = [
    'mobile_no',
    'address',
    'email',
    'qr_code',
   ];

}
