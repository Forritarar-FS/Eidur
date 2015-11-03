<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	protected $fillable = [
			'id',
			'user_id',
			'post_id',
			'comment'
		];

		public function setPublishedAtAttribute($date)
		{
			$this->attributes['pubslished_at'] = Carbon::parse($date);
		}

		public function user()
		{
			return $this->belongsTo('App\User');
		}
		public function posts()
		{
			return $this->belongsTo('App\Posts');
		}
}
