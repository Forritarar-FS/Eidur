<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ChildrenComment extends Model {

	protected $fillable = [
			'id',
			'user_id',
			'posts_id',
			'comments_id',
			'fileToUpload',
			'comment'
		];

		public function setPublishedAtAttribute($date)
		{
			$this->attributes['published_at'] = Carbon::parse($date);
		}

		public function user()
		{
			return $this->belongsTo('App\User');
		}
		public function comments()
		{
			return $this->belongsTo('App\Comments');
		}

}
