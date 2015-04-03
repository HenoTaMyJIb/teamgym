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

		// $this->call('UserTableSeeder');
        $this->call('ClubsTableSeeder');
	}


}

class ClubsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('clubs')->delete();

        \App\Club::create(['name' => 'Trefoil', 'address' => 'Aia 20, Tallinn', 'phone' => '+372 56 469 095', 'email' => 'trefoil@trefoil.ee']);
    }

}
