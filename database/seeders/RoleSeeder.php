<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$roles = [
			[
				'name' => 'r_admin',
			],
			[
				'name' => 'r_support_employee',
			],
			[
				'name' => 'r_branch_employee',
			],
			[
				'name' => 'r_product_provider',
			],
			[
				'name' => 'r_customer',
			],
			[
				'name' => 'r_locked',
			],
		];

		$date = new \DateTime();

		foreach ($roles as $role) {
			DB::table('roles')->insert([
				'name' => $role['name'],
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
			]);
		}
    }
}
