<?php

class AgeGroupTableSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        DB::table('age_groups')->delete();
        \App\Models\AgeGroup::create(['name' => 'Mini B', 'code_of_points' => 'mini_b_eelv', 'gymnasts_amount' => 'full', 'min_age' => '5', 'max_age' => '7', 'slug' => 'mini-b']);
        \App\Models\AgeGroup::create(['name' => 'Mini A', 'code_of_points' => 'mini_a_eelv', 'gymnasts_amount' => 'full', 'min_age' => '6', 'max_age' => '8', 'slug' => 'mini-a']);
        \App\Models\AgeGroup::create(['name' => 'Children B', 'code_of_points' => 'lapsed_b_eelv', 'gymnasts_amount' => 'full', 'min_age' => '7', 'max_age' => '12', 'slug' => 'children-b']);
        \App\Models\AgeGroup::create(['name' => 'Children A', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'full', 'min_age' => '8', 'max_age' => '12', 'slug' => 'lapsed-a']);
        \App\Models\AgeGroup::create(['name' => 'Youth', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'full', 'min_age' => '11', 'max_age' => '15', 'slug' => 'youth']);
        \App\Models\AgeGroup::create(['name' => 'Juniors', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'full', 'min_age' => '12', 'max_age' => '17', 'slug' => 'juniors']);
        \App\Models\AgeGroup::create(['name' => 'Seniors', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'full', 'min_age' => '16', 'max_age' => '100', 'slug' => 'seniors']);
        \App\Models\AgeGroup::create(['name' => 'Trio Youth', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'trio', 'min_age' => '8', 'max_age' => '12', 'slug' => 'trio-youth']);
        \App\Models\AgeGroup::create(['name' => 'Trio Juniors', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'trio', 'min_age' => '12', 'max_age' => '17', 'slug' => 'trio-juniors']);
        \App\Models\AgeGroup::create(['name' => 'Trio Seniors', 'code_of_points' => 'ueg', 'gymnasts_amount' => 'trio', 'min_age' => '16', 'max_age' => '100', 'slug' => 'trio-seniors']);
    }

} 