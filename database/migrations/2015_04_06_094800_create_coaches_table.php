<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coaches', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('club_id')->unsigned();
            $table->string('category')->nullable();
            $table->string('status');
			$table->timestamps();

            $table->foreign('club_id')
                   ->references('id')
                   ->on('clubs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coaches');
	}

}
