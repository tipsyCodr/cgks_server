<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request;

class Settings extends Model
{    
    protected $fillable = ['name', 'value'];

    public $timestamps = true;

    public static function getSetting($name)
    {
        return self::where('name', $name)->value('value');
    }

    public static function setSetting($name, $value)
    {
        return self::updateOrCreate(
            ['name' => $name],
            ['value' => $value]
        );
    }
}
