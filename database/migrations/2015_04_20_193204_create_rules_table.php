<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rules', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('file_ee')->unsigned()->nullable();
            $table->integer('file_ru')->unsigned()->nullable();
            $table->integer('file_en')->unsigned()->nullable();
            $table->string('slug')->unique();
			$table->timestamps();

            $table->foreign('file_ee')
                ->references('id')
                ->on('files')
                ->onDelete('cascade');

            $table->foreign('file_ru')
                ->references('id')
                ->on('files')
                ->onDelete('cascade');

            $table->foreign('file_en')
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
		Schema::drop('rules');
	}

}
