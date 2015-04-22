<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGymnastsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gymnasts', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('person_id')->unsigned()->nullable();
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
		Schema::drop('gymnasts');
	}

}
