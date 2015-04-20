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

        $this->call('PersonTableSeeder');
		$this->call('UserTableSeeder');
        $this->call('ClubTableSeeder');
        $this->call('ClassifierSeeder');
        $this->call('CoachTableSeeder');
	}
}