<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
class userProfile extends Controller
{
    function index()
	{
		// return profile::all();
		// return profile::count();
		return profile::count();
	}
	function delete()
	{
		$res=profile::find(1);
		$res->delete();
	}
	function insert()
	{
		$res=new profile();
		$res->name='Zahoor';
		$res->email='Zahoor@gmail.com';
		$res->city='Lahore';
		$res->save();
	}
	function update()
	{
		$res=profile::find(2);
		$res->name='rehan';
		$res->email='rehan@gmail.com';
		$res->city='Lahore';
		$res->save();
	}
}
