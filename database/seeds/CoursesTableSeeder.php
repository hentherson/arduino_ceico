<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CoursesTableSeeder
 */
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Tercero',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('courses')->insert([
            'name' => 'Cuarto',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('courses')->insert([
            'name' => 'Quinto',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
