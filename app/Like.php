<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	protected $fillable = [
			'id',
			'post_id',
			'user_id'
		];

}
