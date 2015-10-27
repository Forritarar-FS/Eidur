<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->string('fileToUpload');
			$table->integer('video')->default(0);
			$table->integer('gif')->default(0);
			$table->integer('cosplay')->default(0);
			$table->integer('nsfw')->default(0);
			$table->integer('wtf')->default(0);
			$table->integer('technical')->default(0);
			$table->timestamps();
			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
