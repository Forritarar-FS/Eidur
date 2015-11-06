<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	protected $fillable = [
			'id',
			'title',
			'fileToUpload',
			'tags',
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
		public function scopeTags($query, $tags)
		{
			$query->where('tags', '=', $tags);
		}
		public function scopeIndex($query)
		{
			$query->where('tags', '!=', 'nsfw');
		}
		public function scopeTakeRandom($query, $size=1)
		{
    return $query->orderBy(Posts::raw('RAND()'))->take($size);
	}
	public function likes()
	{
    return $this->belongsToMany('App\User', 'likes');
	}
}
