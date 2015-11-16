<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller {

	public function index()
	{
		return view('profile/index');
	}
	public function edit()
	{
		return view('profile/edit');
	}
	public function password()
	{
		return view('profile/password');
	}

}
