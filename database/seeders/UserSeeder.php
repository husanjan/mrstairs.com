<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserSeeder
 *
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mrstairs.com',
            'password' => Hash::make('admin_pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'customer@mrstairs.com',
            'password' => Hash::make('customer_pass'),
        ]);
    }
}
