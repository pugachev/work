<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShainTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shain', function(Blueprint $table)
		{
			$table->integer('shain_id', true);
			$table->string('shain_name', 100)->nullable();
			$table->integer('sex')->nullable();
			$table->string('post', 10)->nullable();
			$table->string('address', 100)->nullable();
			$table->string('telno', 20)->nullable();
			$table->string('email', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shain');
	}

}
