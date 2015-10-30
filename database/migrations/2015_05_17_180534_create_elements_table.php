<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elements', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('discipline_code');
            $table->string('symbol')->nullable();
            $table->string('picture')->nullable();
            $table->string('type_code');
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('discipline_code')->references('code')->on('disciplines')->onDelete('cascade');
            $table->foreign('type_code')->references('code')->on('element_types')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('elements');
	}

}
