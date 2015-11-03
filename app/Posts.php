<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	protected $fillable = [
			'id',
			'title',
			'fileToUpload',
			'created_by'
		];

		public function setPublishedAtAttribute($date)
		{
			$this->attributes['pubslished_at'] = Carbon::parse($date);
		}

		public function user()
		{
			return $this->belongsTo('App\User');
		}
		public function comments()
		{
			return $this->hasMany('App\Comments');
		}
}
