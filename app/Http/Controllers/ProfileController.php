<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Input;

use Illuminate\Http\Request;

class ProfileController extends Controller {

	public function index()
	{
		if (Auth::user()) {
			return view('profile/index');
		} else {
			return redirect('/');
		}
	}
	public function viewUser($user)
	{
		$user = User::whereName($user)->firstOrFail();
		return view('profile', compact('user'));
	}
	public function quote()
	{
		if (Auth::user()) {
			return view('profile/quote');
		} else {
			return redirect('/');
		}
	}
	public function editQuote()
	{
		$user = Auth::user();
		$fl = Input::get('funnylevel');
		$user->funnylevel = $fl;
		$user->save();
		return redirect('profile/quote');
	}
	public function name()
	{
		if (Auth::user()) {
			return view('profile/name');
		} else {
			return redirect('/');
		}
	}
	public function editName()
	{
		$user = Auth::user();
		$fl = Input::get('name');
		$user->name = $fl;
		$user->save();
		return redirect('profile/name');
	}
	public function country()
	{
		if (Auth::user()) {
			return view('profile/country');
		} else {
			return redirect('/');
		}
	}
	public function editCountry()
	{
		$user = Auth::user();
		$fl = Input::get('country');
		$user->country = $fl;
		$user->save();
		return redirect('profile/country');
	}
	public function edit()
	{
		return view('profile/edit');
	}
	public function password()
	{
		if (Auth::user()) {
			return view('profile/password');
		} else {
			return redirect('/');
		}
	}
	public function editPassword()
	{
		$user = Auth::user();
		$fl = Input::get('password');
		$user->password = $fl;
		$user->save();
		return redirect('profile/country');
	}
	public function editProfilePicture(Requests\CreateProfileRequest $request)
	{
		$user = Auth::user();

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
									$user->avatar = $target_file;
									$user->save();
					} else {
									echo "Sorry, there was an error uploading your file.";
					}
	}
	}
}
