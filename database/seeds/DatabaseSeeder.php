<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('ClubTableSeeder');
//        $this->call('PersonTableSeeder');
        $this->call('ClassifierSeeder');
        $this->call('UserTableSeeder');
        $this->call('AgeGroupTableSeeder');
        $this->call('TumblingElementsTableSeeder');
        $this->call('TrampetteElementsTableSeeder');
        $this->call('FakeCompetitionsSeeder');

	}
}