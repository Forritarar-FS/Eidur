<?php namespace App\Http\Controllers;

use App\Posts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller {

	public function index()
	{
		$posts = Posts::latest()->simplePaginate(5);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('index', compact('posts'));
	}

	public function show($id)
	{
		$post = Posts::find($id);
		//return $post;
		return view('posts', compact('post'));
	}

}
