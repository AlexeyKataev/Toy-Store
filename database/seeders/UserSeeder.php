<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
			[
				'role_id' => '1',
				'name' => 'empty',
				'first_name' => 'empty',
				'second_name' => 'empty',
				'phone_number' => 'empty',
				'email' => 'empty',
				'email_verified_at' => now(),
            	'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           		'remember_token' => Str::random(10),
				'consent_to_the_processing_of_personal_data' => true,
			],
		];
		
		$date = new \DateTime();

		foreach ($users as $user) {
			DB::table('users')->insert([
				'role_id' => $user['role_id'],
				'name' => $user['name'],
				'first_name' => $user['first_name'],
				'second_name' => $user['second_name'],
				'phone_number' => $user['phone_number'],
				'email' => $user['email'],
				'email_verified_at' => now(),
				'password' => $user['password'],
			    'remember_token' => Str::random(10),
				'consent_to_the_processing_of_personal_data' => true,
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
			]);
		}
    }
}
