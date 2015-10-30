<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tariff_forms', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('discipline_code');
            $table->integer('team_id')->unsigned();
            $table->string('status');
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
		Schema::drop('tariff_forms');
	}

}
