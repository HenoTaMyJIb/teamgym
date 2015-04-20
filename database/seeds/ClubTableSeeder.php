<?php

class ClubTableSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        DB::table('clubs')->delete();
        \App\Models\Club::create(['name' => 'Trefoil', 'address' => 'Aia 20, Tallinn', 'phone' => '+372 56 469 095', 'email' => 'trefoil@trefoil.ee', 'slug' => 'trefoil']);
    }

} 