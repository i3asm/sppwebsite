<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArchiveController extends Controller
{
	function show($post) {

		$person = DB::table('archive') -> where('name',$post)->firstOrFail();

		return view("news",[
			'person' => $person
		]);
	}
}
