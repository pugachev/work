<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShohin2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shohin2', function(Blueprint $table)
		{
			$table->integer('shohin_id', true);
			$table->string('shohin_name', 100)->nullable();
			$table->string('category', 50)->nullable();
			$table->integer('shiire_tanka')->nullable();
			$table->integer('hanbai_tanka')->nullable();
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
		Schema::drop('shohin2');
	}

}
