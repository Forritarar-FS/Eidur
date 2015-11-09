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
		$posts = Posts::latest()->index()->Paginate(30);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('index', compact('posts'));
	}
	public function video()
	{
		$posts = Posts::latest()->tags('video')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('video', compact('posts'));
	}
	public function gif()
	{
		$posts = Posts::latest()->tags('gif')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('gif', compact('posts'));
	}
	public function cosplay()
	{
		$posts = Posts::latest()->tags('cosplay')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('cosplay', compact('posts'));
	}
	public function nsfw()
	{
		$posts = Posts::latest()->tags('nsfw')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('nsfw', compact('posts'));
	}
	public function wtf()
	{
		$posts = Posts::latest()->tags('wtf')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('wtf', compact('posts'));
	}
	public function technical()
	{
		$posts = Posts::latest()->tags('technical')->Paginate(18);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('technical', compact('posts'));
	}

	public function show($id)
	{
		$post = Posts::find($id);
		$comments = $post->comments()->orderBy('pubslished_at', 'desc')->get();

		return view('posts', compact('post', 'comments'));
	}

	public function comment(Requests\CreateCommentsRequest $request, $post)
	{
		$posts = Posts::whereId($post)->first();

		$comment = new Comments(Request::all());
		$comment->pubslished_at = Carbon::now();
		$comment->user()->associate(Auth::user());
		$comment->posts()->associate($posts);
		$comment->save();

		return redirect('posts/' . $post);
	}
	public function isLikedByMe($id)
	{
	    $post = Posts::findOrFail($id)->first();
	    if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
	        return 'true';
	    }
	    return 'false';
	}


}
