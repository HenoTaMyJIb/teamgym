<?php

use Illuminate\Database\Seeder;

class FakeCompetitionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('competitions')->delete();
        DB::table('teams')->delete();
        DB::table('gymnast_team')->delete();

        \App\Models\Competition::create([
            'name' => 'TeamGym Trefoil Talveturniir 2014',
            'address' => 'Aia 20, Tallinn',
            'start_date' => '05.12.2015',
            'created_by' => 1,
            'reg_start' => '02.11.2015',
            'reg_end' => '27.11.2015',
            'pre_reg_end' => '20.11.2015'
        ]);

        \App\Models\Team::create(['name' => 'Mini B', 'age_group_id' => 1, 'gender_category' => 'men', 'club_id' => 1, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'mini-b', 'status' => 'registered']);

        \App\Models\Team::create(['name' => 'Mini Girls', 'age_group_id' => 2, 'gender_category' => 'women', 'club_id' => 1, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'mini-girls', 'status' => 'registered']);
        \App\Models\Team::create(['name' => 'Sky Boys', 'age_group_id' => 2, 'gender_category' => 'men', 'club_id' => 1, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'sky-boys', 'status' => 'registered']);

        \App\Models\Team::create(['name' => 'Flores', 'age_group_id' => 2, 'gender_category' => 'women', 'club_id' => 4, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'flores', 'status' => 'registered']);

        \App\Models\Team::create(['name' => 'Mini', 'age_group_id' => 2, 'gender_category' => 'men', 'club_id' => 2, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'mini', 'status' => 'registered']);

        \App\Models\Team::create(['name' => 'Girls', 'age_group_id' => 3, 'gender_category' => 'women', 'club_id' => 1, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'girls', 'status' => 'registered']);

        \App\Models\Team::create(['name' => 'Reval', 'age_group_id' => 4, 'gender_category' => 'men', 'club_id' => 1, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'reval', 'status' => 'registered']);
        \App\Models\Team::create(['name' => 'Titans', 'age_group_id' => 4, 'gender_category' => 'men', 'club_id' => 3, 'competition_id' => \App\Models\Competition::all()->last()->id, 'created_by' => 1, 'slug' => 'titans', 'status' => 'registered']);
    }
}
