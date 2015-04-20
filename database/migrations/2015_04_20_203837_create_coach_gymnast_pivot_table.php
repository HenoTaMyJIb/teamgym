<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachGymnastPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coach_gymnast', function(Blueprint $table)
		{
			$table->integer('coach_id')->unsigned()->index();
			$table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
			$table->integer('gymnast_id')->unsigned()->index();
			$table->foreign('gymnast_id')->references('id')->on('gymnasts')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coach_gymnast');
	}

}
