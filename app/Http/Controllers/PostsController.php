<?php namespace App\Http\Controllers;

use App\Posts;
use App\Like;
use Auth;
use Image;
use Input;
use Request;
use App\Comments;
use App\ChildrenComment;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class PostsController extends Controller {

	public function index()
	{
		$posts = Posts::latest()->index()->Paginate(120);
		//return view('index', ['posts' => $posts]);

		//$posts = Posts::latest()->get();
		return view('index', compact('posts', 'image'));
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
		$comment = Comments::find($id);
		$comments = $post->comments()->orderBy('published_at', 'desc')->get();
		if ($comment === null) {
		} else {
			$myChildComments = $comment->children()->orderBy('created_at', 'desc')->get();
		}

		$postLike = $post->likes()->wherePoints(1)->count();
		$postDisLike = $post->likes()->wherePoints(-1)->count();

		$postPoints = $postLike - $postDisLike;

		return view('posts', compact('post', 'comments', 'postPoints', 'myChildComments'));
	}


	public function comments(Requests\CreateCommentsRequest $request, $post)
	{
    $posts = Posts::whereId($post)->first();

    $target_dir = "uploads/images/comments/";
    $target_file = $target_dir . preg_replace("/[^A-Za-z0-9\_\-\.]/", '', basename($_FILES['fileToUpload']["name"]));
    $uploadOk = 1;
    $findme   = ".";
    $pos = strpos($target_file, $findme);
    //echo $target_file;
    //dd($_POST);
    //echo ini_get('upload_max_filesize');
    //echo $_FILES["fileToUpload"]["error"];
    $imageFileType = strtolower(substr($target_file,$pos+1));
    if (isset($_FILES["fileToUpload"]) && is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;

                } else {
                echo "File is not an image.";
                    $uploadOk = 0;
            }
    } else if(isset($_POST["comment"])) {
			$comment = new Comments(Request::all());
			$comment->published_at = Carbon::now();
			$comment->user()->associate(Auth::user());
			$comment->posts()->associate($posts);
			$comment->save();
		}

    $filecheck = 0;
    $orgFileName = $target_file;
    while (file_exists($target_file)) {
        $target_file = substr($orgFileName,0,$pos).$filecheck.substr($orgFileName,$pos);
        $filecheck++;

            $uploadOk = 1;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000000*8) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo $imageFileType;
            $uploadOk = 0;
    }

		//$target_file = false; // set to false because we use this later regardless


    if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";

    } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                    $comment = new Comments(Request::all());
                    $comment->published_at = Carbon::now();
                    if ($target_file) $comment->fileToUpload = $target_file;
                    $comment->user()->associate(Auth::user());
                    $comment->posts()->associate($posts);
                    $comment->save();

            } else {
                    echo "Sorry, there was an error uploading your file.";
            }
    }

    return redirect('posts/' . $post);
}
	public function commentsReply(Requests\CreateChildrenRequest $request, $comment)
	{
		//is't only one comment so 'comment' not 'comments'
		$myComment = Comments::whereId($comment)->first();

		$target_dir = "uploads/images/comments/";
		$target_file = $target_dir . preg_replace("/[^A-Za-z0-9\_\-\.]/", '', basename($_FILES['fileToUpload']["name"]));
		$uploadOk = 1;
		$findme   = ".";
		$pos = strpos($target_file, $findme);
		//echo $target_file;
		//dd($_POST);
		//echo ini_get('upload_max_filesize');
		//echo $_FILES["fileToUpload"]["error"];
		$imageFileType = strtolower(substr($target_file,$pos+1));
		if (isset($_FILES["fileToUpload"]) && is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])){
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
										echo "File is an image - " . $check["mime"] . ".";
										$uploadOk = 1;

								} else {
								echo "File is not an image.";
										$uploadOk = 0;
						}
		} else if(isset($_POST["comment"])) {
			$myChildComment = new ChildrenComment(Request::all());
			$myChildComment->created_at = Carbon::now();
			$myChildComment->user()->associate(Auth::user());
			$myChildComment->comments()->associate( $myComment );
			$myChildComment->save();
		}

		$filecheck = 0;
		$orgFileName = $target_file;
		while (file_exists($target_file)) {
				$target_file = substr($orgFileName,0,$pos).$filecheck.substr($orgFileName,$pos);
				$filecheck++;

						$uploadOk = 1;
		}

		if ($_FILES["fileToUpload"]["size"] > 500000000*8) {
						echo "Sorry, your file is too large.";
						$uploadOk = 0;
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						echo $imageFileType;
						$uploadOk = 0;
		}

		//$target_file = false; // set to false because we use this later regardless


		if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";

		} else {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
										echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
										$myChildComment = new ChildrenComment(Request::all());
										$myChildComment->created_at = Carbon::now();
										$myChildComment->user()->associate(Auth::user());
										if ($target_file) $myChildComment->fileToUpload = $target_file;
										$myChildComment->comments()->associate( $myComment );
										$myChildComment->save();

						} else {
										echo "Sorry, there was an error uploading your file.";
						}
		}
		return Redirect::back();
}

	public function isLikedByMe($id)
	{
	  $post = Posts::findOrFail($id)->first();
	  if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
	      return 'true';
	  }
	  return 'false';
	}

public function like($id)
{
    // Get the Post
    $post = Posts::whereId($id)->first();
    // If the user already like this post, we delete the like
    $existing_like = Like::wherePostsId($post->id)->whereUserId(Auth::id())->first();
    if (!is_null($existing_like)) {
        $existing_like->points=1;
				$existing_like->save();
				return redirect('posts/' . $post->id);
    }
    else { // The user don't like this post yet

        // We check if the user already liked this post once, but unliked it.
        $existing_like = Like::wherePostsId($post->id)->whereUserId(Auth::id())->first();

        if (!is_null($existing_like)) { // The user has liked the post before, but deleted his like later
            // Then, we restore this like
            $existing_like->restore();
        }
        else { // The user never liked this post before, so we create the like, and we can trigger some events (notifications, etc)
            $like = new Like;
            $like->posts_id = $post->id;
            $like->user_id = Auth::id();
						$like->points = 1;
            $like->save();
						return redirect('posts/' . $post->id);
        }
    }
}
public function dislike($id)
{
    // Get the Post
    $post = Posts::whereId($id)->first();
    // If the user already like this post, we delete the like
    $existing_dislike = Like::wherePostsId($post->id)->whereUserId(Auth::id())->first();
    if (!is_null($existing_dislike)) {
        $existing_dislike->points=-1;
				$existing_dislike->save();
				return redirect('posts/' . $post->id);
    }
    else { // The user don't like this post yet

        // We check if the user already liked this post once, but unliked it.
        $existing_dislike = Like::wherePostsId($post->id)->whereUserId(Auth::id())->first();

        if (!is_null($existing_dislike)) { // The user has liked the post before, but deleted his like later
            // Then, we restore this like
            $existing_dislike->restore();
        }
        else { // The user never liked this post before, so we create the like, and we can trigger some events (notifications, etc)
            $dislike = new Like;
            $dislike->posts_id = $post->id;
            $dislike->user_id = Auth::id();
						$dislike->points = -1;
            $dislike->save();
						return redirect('posts/' . $post->id);
        }
    }
}


}
