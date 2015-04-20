<?php

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = \App\Models\Person::find(6);
        \App\User::create(['email' => 'aljona.orlova@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'person_id' => $user->id]);

        $user = \App\Models\Person::find(7);
        \App\User::create(['email' => 'gelena.orlova@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'person_id' => $user->id]);
    }

}