<?php namespace App\Http\Controllers;

use App\Posts;
use Auth;
use App\Comments;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Image;
use Input;

class IndexController extends Controller {

	public function index()
	{
		return view('');
	}
	public function create()
	{
		return view('create');
	}

	public function upload(Requests\CreatePostsRequest $request)
	{
		$target_dir = "uploads/images/posts/";
		$target_file = $target_dir . preg_replace("/[^A-Za-z0-9\_\-\.]/", '', basename($_FILES['fileToUpload']["name"]));
		$uploadOk = 1;
		$findme   = ".";
		$pos = strpos($target_file, $findme);
		//echo $target_file;
		//dd($_POST);
		echo ini_get('upload_max_filesize');
		echo $_FILES["fileToUpload"]["error"];
		$imageFileType = strtolower(substr($target_file,$pos+1));
		if(isset($_POST["submit"])) {
	  	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	    	echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	      echo "File is not an image.";
	      $uploadOk = 1;
	    }
	}
	$filecheck = 0;
	$orgFileName = $target_file;
	while (file_exists($target_file)) {
			$target_file = substr($orgFileName,0,$pos).$filecheck.substr($orgFileName,$pos);
			$filecheck++;
						$uploadOk = 1;
	}
		if ($_FILES["fileToUpload"]["size"] > 200 * 1000 * 1000) {
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
									$post = new Posts($request->all());
									$post->fileToUpload = $target_file;
									Auth::user()->posts()->save($post);
					} else {
									echo "Sorry, there was an error uploading your file.";
					}
	}
		return redirect('');
}



}
