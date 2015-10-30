<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGymnastAmountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gymnast_amounts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->integer('min')->unsigned();
            $table->integer('max')->unsigned();
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
		Schema::drop('gymnast_amounts');
	}

}
