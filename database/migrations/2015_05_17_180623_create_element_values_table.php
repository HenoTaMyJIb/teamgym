<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('element_values', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code_of_points');
            $table->double('value');
            $table->string('code');
            $table->integer('element_id')->unsigned();
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('code_of_points')->references('code')->on('code_of_points')->onDelete('cascade');
            $table->foreign('element_id')->references('id')->on('elements')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('element_values');
	}

}
