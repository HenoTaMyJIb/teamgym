<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionJudgePivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competition_judge', function(Blueprint $table)
		{
			$table->integer('competition_id')->unsigned()->index();
			$table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
			$table->integer('judge_id')->unsigned()->index();
			$table->foreign('judge_id')->references('id')->on('judges')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('competition_judge');
	}

}
