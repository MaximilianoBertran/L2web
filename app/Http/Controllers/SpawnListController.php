<?php

namespace App\Http\Controllers;

use App\Models\Raidboss_spawnlist;
use Illuminate\Http\Request;

class SpawnListController extends Controller
{
    public function index() {
    	$raids= Raidboss_spawnlist::raidList();
    		
    	return view('raids', ['raids' => $raids]);
    }
}
