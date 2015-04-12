<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgeGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('age_groups', function(Blueprint $table)
		{
			$table->increments('id');
//            $table->string('code');
            $table->string('name');
            $table->string('rule_type');
            $table->string('gymnasts_amount');
            $table->integer('min_year');
            $table->integer('max_year');
            $table->string('slug');
			$table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('age_groups');
	}

}
