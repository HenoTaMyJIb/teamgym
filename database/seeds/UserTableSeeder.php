<?php

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('users')->delete();
        \App\User::create(['name' => 'Aljona Orlova', 'email' => 'aljona.orlova@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('password')]);
    }

}