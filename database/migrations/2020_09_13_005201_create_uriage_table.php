<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUriageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uriage', function(Blueprint $table)
		{
			$table->integer('denpyo_no', true);
			$table->date('uriage_date')->nullable();
			$table->integer('shohin_id')->nullable();
			$table->integer('suryo')->nullable();
			$table->integer('shain_id')->nullable();
			$table->integer('kokyaku_id')->nullable();
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
		Schema::drop('uriage');
	}

}
