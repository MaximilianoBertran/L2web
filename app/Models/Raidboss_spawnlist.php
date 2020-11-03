<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Raidboss_spawnlist extends Model
{
    public static function raidList()
    {
    	$raids = DB::select('SELECT raidboss_spawnlist.respawn_time, npc.name FROM raidboss_spawnlist, npc where raidboss_spawnlist.boss_id = npc.id');
		return $raids;
    }
}
