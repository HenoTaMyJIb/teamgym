<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age_group_id')->unsigned();
            $table->string('gender_category');
            $table->string('name');
            $table->integer('club_id')->unsigned();
            $table->integer('competition_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->string('slug');
            $table->string('status');
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');

            $table->foreign('age_group_id')->references('id')->on('age_groups')->onDelete('cascade');

            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');

            $table->foreign('gender_category')->references('code')->on('genders')->onDelete('cascade');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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

}
