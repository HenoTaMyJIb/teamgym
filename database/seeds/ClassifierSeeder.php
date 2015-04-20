<?php

class ClassifierSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        DB::table('classifiers')->delete();
        \App\Models\Classifier::create(['code' => 'gymnasts_amount', 'name' => 'Gymnasts amount', 'notes' => 'Defines min and max team members']);
        \App\Models\Classifier::create(['code' => 'team_type', 'name' => 'Team types', 'notes' => 'Woman, man, mixed']);
        \App\Models\Classifier::create(['code' => 'rule_type', 'name' => 'Rule types', 'notes' => 'Different rules such as UEG or EEVL']);
        \App\Models\Classifier::create(['code' => 'coach_category', 'name' => 'Coach categories', 'notes' => 'Coach categories']);

        DB::table('classifier_items')->delete();
        $classifier = \App\Models\Classifier::where('code', '=', 'gymnasts_amount')->first();
        \App\Models\ClassifierItem::create(['code' => 'trio', 'name' => 'Trio', 'classifier_id' => $classifier->id]);
        \App\Models\ClassifierItem::create(['code' => 'full', 'name' => 'Full', 'classifier_id' => $classifier->id]);

        $classifier = \App\Models\Classifier::where('code', '=', 'gender_category')->first();
        \App\Models\ClassifierItem::create(['code' => 'women', 'name' => 'Women', 'classifier_id' => $classifier->id]);
        \App\Models\ClassifierItem::create(['code' => 'men', 'name' => 'Men', 'classifier_id' => $classifier->id]);
        \App\Models\ClassifierItem::create(['code' => 'mix', 'name' => 'Mix', 'classifier_id' => $classifier->id]);

        $classifier = \App\Models\Classifier::where('code', '=', 'rule_type')->first();
        \App\Models\ClassifierItem::create(['code' => 'ueg', 'name' => 'UEG', 'classifier_id' => $classifier->id]);
        \App\Models\ClassifierItem::create(['code' => 'mini', 'name' => 'Mini EEVL', 'classifier_id' => $classifier->id]);
        \App\Models\ClassifierItem::create(['code' => 'youth', 'name' => 'Youth EEVL', 'classifier_id' => $classifier->id]);

        $classifier = \App\Models\Classifier::where('code', '=', 'coach_category')->first();
        \App\Models\ClassifierItem::create(['code' => 'first', 'name' => 'First', 'classifier_id' => $classifier->id]); // sample

    }

} 