<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('posts_id')->unsigned();
			$table->text('comment');
			$table->string('fileToUpload')->default("uploads/images/comments/NFF4D00-0.png");
			$table->timestamp('pubslished_at');
			$table->timestamps();
			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');
			$table->foreign('posts_id')
					->references('id')
						->on('posts')
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
		Schema::drop('comments');
	}

}
