<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert(array(
			'name'     => 'aman',
			'email'    => 'antoineclientjuillet@conseilmoa.fr',
			'password' => Hash::make('12345678')
		));
		
        // \App\Models\User::factory(10)->create();
    }
}
