<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassifierItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classifier_items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->text('notes')->nullable();
            $table->integer('classifier_id')->unsigned();
			$table->timestamps();

            $table->foreign('classifier_id')
                ->references('id')
                ->on('classifiers')
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
		Schema::drop('classifier_items');
	}

}
