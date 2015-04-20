<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competitions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('address');
            $table->integer('file_req')->unsigned()->nullable();
            $table->integer('file_results')->unsigned()->nullable();
            $table->date('reg_start');
            $table->date('reg_end');
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('file_req')
                ->references('id')
                ->on('files')
                ->onDelete('cascade');

            $table->foreign('file_results')
                ->references('id')
                ->on('files')
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
		Schema::drop('competitions');
	}

}
