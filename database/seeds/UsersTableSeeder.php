<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Hentherson',
            'email' => 'vegawilches@gmail.com',
            'password' => bcrypt('ceico123#'),
            'first_name' => 'Hentherson',
            'last_name' => 'Vega',
            'created_at' => now(),
            'updated_at' => now(),
            'rol_id' => 1
        ]);
    }
}
