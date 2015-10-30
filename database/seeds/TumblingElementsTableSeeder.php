<?php

use Illuminate\Database\Seeder;

class TumblingElementsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('elements')->delete();

        /*======== Forward Elements ========*/
        \App\Models\Element::create(['name' => 'Roll forward', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw0.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.05, 'code' => 'Tfw0', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Cartwheel', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.05, 'code' => 'Tfw1', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.2, 'code' => 'Tfw1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Cartwheel (one hand)', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw1_1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.25, 'code' => 'Tfw1_1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw2.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.2, 'code' => 'Tfw2', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.3, 'code' => 'Tfw2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring (one leg)', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw2_1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.35, 'code' => 'Tfw2_1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Flyspring', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw3.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.2, 'code' => 'Tfw3', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.4, 'code' => 'Tfw3', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw4.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.25, 'code' => 'Tfw4', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.6, 'code' => 'Tfw4', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck Half', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw5.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.3, 'code' => 'Tfw5', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Tfw5', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw6.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.3, 'code' => 'Tfw6', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Tfw6', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike Half', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw7.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.35, 'code' => 'Tfw7', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.8, 'code' => 'Tfw7', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw8.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.35, 'code' => 'Tfw8', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.8, 'code' => 'Tfw8', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck Full', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw9.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.4, 'code' => 'Tfw9', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.8, 'code' => 'Tfw9', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Half', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw10.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.4, 'code' => 'Tfw10', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.9, 'code' => 'Tfw10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Full', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw11.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.5, 'code' => 'Tfw11', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.0, 'code' => 'Tfw11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '1.5 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw12.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.55, 'code' => 'Tfw12', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.1, 'code' => 'Tfw12', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '2.0 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw13.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.65, 'code' => 'Tfw13', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw14.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.8, 'code' => 'Tfw14', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Half out', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw15.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Tfw15', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw16.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1, 'code' => 'Tfw16', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Full out', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw17.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.05, 'code' => 'Tfw17', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw18.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.1, 'code' => 'Tfw18', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike half out', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw19.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.1, 'code' => 'Tfw19', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck 1.5 out', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw20.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.15, 'code' => 'Tfw20', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Half out', 'discipline_code' => 'tumbling', 'type_code' => 'forward', 'symbol' => 'img/teamgym/symbols/tumbling/tfw21.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.2, 'code' => 'Tfw21', 'element_id' => \App\Models\Element::all()->last()->id]);


        /*======== Backward Elements ========*/
        \App\Models\Element::create(['name' => 'Roll backward', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw0.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.05, 'code' => 'Tbw0', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Cartwheel', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw0_1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.2, 'code' => 'Tbw0_1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Roundoff', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.1, 'code' => 'Tbw1', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.3, 'code' => 'Tbw1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Flic Flack', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw2.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.15, 'code' => 'Tbw2', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.5, 'code' => 'Tbw2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw3.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.2, 'code' => 'Tbw3', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Tbw3', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Whipback salto', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw4.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.2, 'code' => 'Tbw4', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Tbw4', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Arabian salto', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw5.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.25, 'code' => 'Tbw5', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw6.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.25, 'code' => 'Tbw6', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.0, 'code' => 'Tbw6', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw7.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.3, 'code' => 'Tbw7', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.1, 'code' => 'Tbw7', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck Full', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw8.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.35, 'code' => 'Tbw8', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.9, 'code' => 'Tbw8', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Half', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw9.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.35, 'code' => 'Tbw9', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.2, 'code' => 'Tbw9', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Full', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw10.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.45, 'code' => 'Tbw10', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.3, 'code' => 'Tbw10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 1.5 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw11.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.5, 'code' => 'Tbw11', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.4, 'code' => 'Tbw11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.0 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw12.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.6, 'code' => 'Tbw12', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.5, 'code' => 'Tbw12', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.5 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw13.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.65, 'code' => 'Tbw13', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw14.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.6, 'code' => 'Tbw14', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Half out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw15.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.7, 'code' => 'Tbw15', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Arabian', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw16.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.7, 'code' => 'Tbw16', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw17.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.8, 'code' => 'Tbw17', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Full', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw18.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.85, 'code' => 'Tbw18', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike Half', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw19.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Tbw19', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw20.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Tbw20', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck 1.5 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw21.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.95, 'code' => 'Tbw21', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Half out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw22.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1, 'code' => 'Tbw22', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck 2.0 Twist', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw23.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.1, 'code' => 'Tbw23', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Full out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw24.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.15, 'code' => 'Tbw24', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double 1.5 Twist out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw25.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.25, 'code' => 'Tbw25', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double 2.0 Twist out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw26.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.4, 'code' => 'Tbw26', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double 2.5 Twist out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw27.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.5, 'code' => 'Tbw27', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double 3.0 Twist out', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw28.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.65, 'code' => 'Tbw28', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Tuck', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw29.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.6, 'code' => 'Tbw29', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Pike', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw30.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.9, 'code' => 'Tbw30', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Tuck Full', 'discipline_code' => 'tumbling', 'type_code' => 'backward', 'symbol' => 'img/teamgym/symbols/tumbling/tbw31.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 2, 'code' => 'Tbw31', 'element_id' => \App\Models\Element::all()->last()->id]);

    }
}
