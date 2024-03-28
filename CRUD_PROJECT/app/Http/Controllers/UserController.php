<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function inscription (Request $request){
		return $request->all();
	}
}
