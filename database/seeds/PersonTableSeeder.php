<?php

class PersonTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('coaches')->delete();
        DB::table('people')->delete();
        \App\Models\Person::create(['firstname' => 'Olga', 'lastname' => 'Gogoladze', 'code' => '11']);
        \App\Models\Person::create(['firstname' => 'Oleg', 'lastname' => 'Semjonov', 'code' => '22']);
        \App\Models\Person::create(['firstname' => 'Tatjana', 'lastname' => 'Kabrits', 'code' => '33']);
        \App\Models\Person::create(['firstname' => 'Julia', 'lastname' => 'Singa', 'code' => '44']);
        \App\Models\Person::create(['firstname' => 'Maksim', 'lastname' => 'Nikolajev', 'code' => '55']);
        \App\Models\Person::create(['firstname' => 'Aljona', 'lastname' => 'Orlova', 'code' => '66']);
        \App\Models\Person::create(['firstname' => 'Gelena', 'lastname' => 'Orlova', 'code' => '77']);
    }
} 