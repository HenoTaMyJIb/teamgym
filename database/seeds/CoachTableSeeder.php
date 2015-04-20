<?php

class CoachTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $club = \App\Models\Club::where('name', '=', 'Trefoil')->first();
        $person = \App\Models\Person::find(1);
        \App\Models\Coach::create(['person_id' => $person->id, 'club_id' => $club->id]);
        $person = \App\Models\Person::find(2);
        \App\Models\Coach::create(['person_id' => $person->id, 'club_id' => $club->id]);
        $person = \App\Models\Person::find(3);
        \App\Models\Coach::create(['person_id' => $person->id, 'club_id' => $club->id]);
        $person = \App\Models\Person::find(4);
        \App\Models\Coach::create(['person_id' => $person->id, 'club_id' => $club->id]);
        $person = \App\Models\Person::find(5);
        \App\Models\Coach::create(['person_id' => $person->id, 'club_id' => $club->id]);
    }
} 