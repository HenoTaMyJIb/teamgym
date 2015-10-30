<?php

use Illuminate\Database\Seeder;

class TrampetteElementsTableSeeder extends Seeder
{
    public function run()
    {
        /*======== With Vaulting Table Backward Rotation ========*/
        \App\Models\Element::create(['name' => '90° on - 90° off', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.35', 'code' => 'Trb1', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '0.9', 'code' => 'Trb1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Half on', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb2.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.45', 'code' => 'Trb2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Half on - Half off', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb3.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.50', 'code' => 'Trb3', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.2', 'code' => 'Trb2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Half on - Full off', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb4.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.60', 'code' => 'Trb4', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.3', 'code' => 'Trb3', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Half on – 1.5 off', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb5.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.65', 'code' => 'Trb5', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.4', 'code' => 'Trb4', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tsukahara', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb6.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.70', 'code' => 'Trb6', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '2.2', 'code' => 'Trb5', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tsukahara Pike', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb7.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.90', 'code' => 'Trb7', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tsukahara Straight', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb8.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.00', 'code' => 'Trb8', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tsukahara Half', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb9.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.10', 'code' => 'Trb9', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Full or Kasamatsu', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb10.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.25', 'code' => 'Trb10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '1.5 or Kasam. Half', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb11.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.35', 'code' => 'Trb11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '2.0 or Kasam. Full', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb12.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.50', 'code' => 'Trb12', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '2.5 or Kasam. 1.5', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb13.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.60', 'code' => 'Trb13', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => '3.0 or Kasam. 2.0', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb14.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.75', 'code' => 'Trb14', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tsukahara', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb15.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.55', 'code' => 'Trb15', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb16.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.85', 'code' => 'Trb16', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight', 'discipline_code' => 'trampette', 'type_code' => 'backward_with_table', 'symbol' => 'img/teamgym/symbols/trampette/trb17.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '2.15', 'code' => 'Trb17', 'element_id' => \App\Models\Element::all()->last()->id]);


        /*======== With Vaulting Table Forward Rotation ========*/
        \App\Models\Element::create(['name' => 'Handspring', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.40', 'code' => 'Trf1', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.0', 'code' => 'Trf1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.45', 'code' => 'Trf2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring Full', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.55', 'code' => 'Trf3', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.2', 'code' => 'Trf2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring 1.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.60', 'code' => 'Trf4', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '1.3', 'code' => 'Trf3', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handspring salto fwd', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.80', 'code' => 'Trf5', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => '2.4', 'code' => 'Trf4', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '0.90', 'code' => 'Trf6', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.00', 'code' => 'Trf7', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.10', 'code' => 'Trf8', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.10', 'code' => 'Trf9', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.20', 'code' => 'Trf10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Full', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.35', 'code' => 'Trf11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 1.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.45', 'code' => 'Trf12', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.0 Twist', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.60', 'code' => 'Trf13', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.70', 'code' => 'Trf14', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Handsp.  Double Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '1.70', 'code' => 'Trf15', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '2.00', 'code' => 'Trf16', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Half', 'discipline_code' => 'trampette', 'type_code' => 'forward_with_table']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => '2.30', 'code' => 'Trf17', 'element_id' => \App\Models\Element::all()->last()->id]);

        /*======== Without Vaulting Table ========*/
        \App\Models\Element::create(['name' => 'Tuck', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw1.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.2, 'code' => 'Trw1', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.5, 'code' => 'Trw1', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw2.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.25, 'code' => 'Trw2', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.6, 'code' => 'Trw2', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Tuck Half', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw3.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.25, 'code' => 'Trw3', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.6, 'code' => 'Trw3', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Pike Half', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw4.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.3, 'code' => 'Trw4', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Trw4', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw5.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.3, 'code' => 'Trw5', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.7, 'code' => 'Trw5', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Half', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw6.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.35, 'code' => 'Trw6', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.8, 'code' => 'Trw6', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight Full', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw7.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.45, 'code' => 'Trw7', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 0.9, 'code' => 'Trw7', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 1.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw8.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.5, 'code' => 'Trw8', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.0, 'code' => 'Trw8', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.0 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw9.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.6, 'code' => 'Trw9', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.1, 'code' => 'Trw9', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 2.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw10.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.65, 'code' => 'Trw10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 3.0 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw11.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.75, 'code' => 'Trw11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Straight 3.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw12.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.8, 'code' => 'Trw12', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw13.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.55, 'code' => 'Trw13', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.2, 'code' => 'Trw10', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Half in', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw14.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.65, 'code' => 'Trw14', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw15.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.65, 'code' => 'Trw15', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw16.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.75, 'code' => 'Trw16', 'element_id' => \App\Models\Element::all()->last()->id]);
        \App\Models\ElementValue::create(['code_of_points' => 'lapsed_b_eelv', 'value' => 1.4, 'code' => 'Trw11', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Full', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw17.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.8, 'code' => 'Trw17', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike Half in', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw18.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.85, 'code' => 'Trw18', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Pike Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw19.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.85, 'code' => 'Trw19', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw20.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.85, 'code' => 'Trw20', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Half in Full out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw21.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Trw21', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck 1.5 Twist out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw22.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Trw22', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Tuck Full in Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw23.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.9, 'code' => 'Trw23', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight In', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw24.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.95, 'code' => 'Trw24', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw25.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 0.95, 'code' => 'Trw25', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Half in Full out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw26.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.2, 'code' => 'Trw26', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight 1.5 out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw27.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.2, 'code' => 'Trw27', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Full in Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw28.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.2, 'code' => 'Trw28', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight Full in 1.5 out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw29.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.45, 'code' => 'Trw29', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Double Straight 3.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw30.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.7, 'code' => 'Trw30', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Tuck Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw31.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.55, 'code' => 'Trw31', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Pike Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw32.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.85, 'code' => 'Trw32', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple Full in Half out', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw33.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 1.95, 'code' => 'Trw33', 'element_id' => \App\Models\Element::all()->last()->id]);

        \App\Models\Element::create(['name' => 'Triple 2.5 Twist', 'discipline_code' => 'trampette', 'type_code' => 'without_table', 'symbol' => 'img/teamgym/symbols/trampette/trw34.png']);
        \App\Models\ElementValue::create(['code_of_points' => 'ueg', 'value' => 2.35, 'code' => 'Trw34', 'element_id' => \App\Models\Element::all()->last()->id]);

    }
}
