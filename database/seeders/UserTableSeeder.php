<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();
		DB::table('users')->insert(array(
			'name'     => 'aman',
			'email'    => 'antoineclientjuillet@conseilmoa.fr',
			'password' => Hash::make('12345678')
		));
    }
}
