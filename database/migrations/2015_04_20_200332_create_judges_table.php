<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('judges', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('person_id')->unsigned()->nullable();
            $table->string('judge_category')->nullable();
            $table->integer('club_id')->unsigned()->nullable();
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('person_id')
                ->references('id')
                ->on('people')
                ->onDelete('cascade');

            $table->foreign('club_id')
                ->references('id')
                ->on('clubs')
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
		Schema::drop('judges');
	}

}
