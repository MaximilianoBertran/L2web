<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    public static function getOnline(){
    	$online = Characters::where('online', '=', '1')->count();
		return $online;
    }
}
