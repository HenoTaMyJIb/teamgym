<?php

class ClubTableSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {

        DB::table('clubs')->delete();
        DB::table('gymnasts')->delete();
        DB::table('coaches')->delete();
        DB::table('people')->delete();

        /* TREFOIL */
        \App\Models\Club::create(['name' => 'SK Trefoil', 'address' => 'Aia 20, Tallinn', 'phone' => '+372 56 469 095', 'email' => 'trefoil@trefoil.ee', 'slug' => 'trefoil']);

        \App\Models\Person::create(['first_name' => 'Olga', 'last_name' => 'Gogoladze', 'code' => '67001011111']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Oleg', 'last_name' => 'Semjonov', 'code' => '67001011111']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Tatjana', 'last_name' => 'Kabrits', 'code' => '67001011111']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Julia', 'last_name' => 'Singa', 'code' => '67001011111']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Maksim', 'last_name' => 'Nikolajev', 'code' => '67001011111']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        /* RONDAAT */
        \App\Models\Club::create(['name' => 'SK Rondaat', 'address' => 'Spordi 2, Kohtla-Järve', 'phone' => '+372 55 630 7935', 'email' => 'sportjura@mail.ru', 'slug' => 'rondaat']);

        \App\Models\Person::create(['first_name' => 'Juri', 'last_name' => 'Stepanov']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Toomas', 'last_name' => 'Arak', 'country' => 'Eesti', 'code' => '50102121111']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Kirill', 'last_name' => 'Volkov', 'country' => 'Eesti', 'code' => '50024021111']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Marat', 'last_name' => 'Muhhamedzjanov', 'country' => 'Eesti', 'code' => '50308081111']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Juri', 'last_name' => 'Dektjarjov', 'country' => 'Eesti', 'code' => '50624062244']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Diana', 'last_name' => 'Tammet', 'country' => 'Eesti', 'code' => '49519082231']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Darja', 'last_name' => 'Guzhovskaja', 'country' => 'Eesti', 'code' => '49807251111']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Viktoria', 'last_name' => 'Ivanova', 'country' => 'Eesti', 'code' => '49901121111']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);

        \App\Models\Person::create(['first_name' => 'Denis', 'last_name' => 'Agutin', 'country' => 'Eesti', 'code' => '50724062244']);
        \App\Models\Gymnast::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);


        /* AKROS */
        \App\Models\Club::create(['name' => 'VK Akros', 'address' => 'Õpetaja 9a (2. korrus), Tartu', 'phone' => '+372 52 46 141', 'email' => 'akros@akros.ee', 'slug' => 'akros']);

        \App\Models\Person::create(['first_name' => 'Heigo', 'last_name' => 'Klaos']);
        \App\Models\Coach::create(['person_id' => \App\Models\Person::all()->last()->id, 'club_id' => \App\Models\Club::all()->last()->id]);
    }

} 