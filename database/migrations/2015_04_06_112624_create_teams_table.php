<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('gymnasts_amount');
            $table->string('type');
            $table->integer('age_group_id');
            $table->string('status');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teams');
	}

    public function amount(){
        return App\Classifier::where('code', '=', $this->gymnasts_amount)->first();
    }

}
