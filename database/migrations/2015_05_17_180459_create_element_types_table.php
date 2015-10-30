<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('element_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->string('discipline_code');
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('discipline_code')->references('code')->on('disciplines')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('element_types');
	}

}
