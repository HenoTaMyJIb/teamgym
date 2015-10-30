<?php

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('users')->delete();

        \App\Models\Person::create(['first_name' => 'Aljona', 'last_name' => 'Orlova', 'code' => '49107302213']);
        \App\User::create(['email' => 'aljona.orlova@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'person_id' => \App\Models\Person::all()->last()->id, 'role_code' => 'admin']);

        \App\Models\Person::create(['first_name' => 'Gelena', 'last_name' => 'Orlova', 'code' => '47009101111']);
        \App\User::create(['email' => 'gelena.orlova@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'person_id' => \App\Models\Person::all()->last()->id, 'role_code' => 'admin']);


        \App\User::create(['email' => 'test@test.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'person_id' => \App\Models\Person::all()->first()->id, 'role_code' => 'coach']);
    }

}