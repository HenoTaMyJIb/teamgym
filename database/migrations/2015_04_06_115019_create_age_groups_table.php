<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgeGroupsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code_of_points');
            $table->string('gymnasts_amount');
            $table->integer('min_age')->unsigned();
            $table->integer('max_age')->unsigned();
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gymnasts_amount')
                ->references('code')
                ->on('gymnast_amounts')
                ->onDelete('cascade');

            $table->foreign('code_of_points')
                ->references('code')
                ->on('code_of_points')
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
        Schema::drop('age_groups');
    }

}
