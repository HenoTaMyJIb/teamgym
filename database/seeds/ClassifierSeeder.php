<?php

class ClassifierSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        DB::table('gymnast_amounts')->delete();
        \App\Models\GymnastAmount::create(['name' => '6 - 12 gymnasts', 'code' => 'full', 'min' => '6', 'max' => '12']);
        \App\Models\GymnastAmount::create(['name' => '3 - 5 gymnasts', 'code' => 'trio', 'min' => '3', 'max' => '5']);

        DB::table('code_of_points')->delete();
        \App\Models\CodeOfPoint::create(['name' => 'Mini B EEVL', 'code' => 'mini_b_eelv']);
        \App\Models\CodeOfPoint::create(['name' => 'Mini A EEVL', 'code' => 'mini_a_eelv']);
        \App\Models\CodeOfPoint::create(['name' => 'Lapsed B EEVL', 'code' => 'lapsed_b_eelv']);
        \App\Models\CodeOfPoint::create(['name' => 'UEG', 'code' => 'ueg']);

        DB::table('genders')->delete();
        \App\Models\Gender::create(['name' => 'Men', 'code' => 'men']);
        \App\Models\Gender::create(['name' => 'Women', 'code' => 'women']);
        \App\Models\Gender::create(['name' => 'Mix', 'code' => 'mix']);

        DB::table('disciplines')->delete();
        \App\Models\Discipline::create(['name' => 'Floor', 'code' => 'floor']);
        \App\Models\Discipline::create(['name' => 'Tumbling', 'code' => 'tumbling']);
        \App\Models\Discipline::create(['name' => 'Trampette', 'code' => 'trampette']);

        DB::table('element_types')->delete();
        \App\Models\ElementType::create(['name'=> 'Pirouettes', 'code' => 'pirouettes', 'discipline_code' => 'floor']);
        \App\Models\ElementType::create(['name'=> 'Jumps / Leaps / Hops', 'code' => 'jumps', 'discipline_code' => 'floor']);
        \App\Models\ElementType::create(['name'=> 'Balance elements', 'code' => 'balance', 'discipline_code' => 'floor']);
        \App\Models\ElementType::create(['name'=> 'Power elements', 'code' => 'power', 'discipline_code' => 'floor']);
        \App\Models\ElementType::create(['name'=> 'Acrobatic elements', 'code' => 'acrobatic', 'discipline_code' => 'floor']);
        \App\Models\ElementType::create(['name'=> 'Forward Elements', 'code' => 'forward', 'discipline_code' => 'tumbling']);
        \App\Models\ElementType::create(['name'=> 'Backward Elements ', 'code' => 'backward', 'discipline_code' => 'tumbling']);
        \App\Models\ElementType::create(['name'=> 'With Vaulting Table Backward Rotation', 'code' => 'backward_with_table', 'discipline_code' => 'trampette']);
        \App\Models\ElementType::create(['name'=> 'With Vaulting Table Forward Rotation', 'code' => 'forward_with_table', 'discipline_code' => 'trampette']);
        \App\Models\ElementType::create(['name'=> 'Without Vaulting Table', 'code' => 'without_table', 'discipline_code' => 'trampette']);

    }

}