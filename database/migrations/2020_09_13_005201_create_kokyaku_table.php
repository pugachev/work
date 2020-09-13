<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKokyakuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kokyaku', function(Blueprint $table)
		{
			$table->integer('kokyaku_id', true);
			$table->string('kokyaku_name', 100)->nullable();
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
		Schema::drop('kokyaku');
	}

}
