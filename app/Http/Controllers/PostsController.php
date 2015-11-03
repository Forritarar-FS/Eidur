<?php namespace App\Http\Controllers;

use App\Posts;
use Auth;
use Request;
use App\Comments;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		$comments = $post->comments()->orderBy('pubslished_at', 'desc')->get();

		return view('posts', compact('post', 'comments'));
	}

	public function comment($post)
	{
		$posts = Posts::whereId($post)->first();

		$comment = new Comments(Request::all());
		$comment->pubslished_at = Carbon::now();
		$comment->user()->associate(Auth::user());
		$comment->posts()->associate($posts);
		$comment->save();

		return redirect('posts/' . $post);
	}
}
