<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('P@55word'), // Password terenkripsi
                'level' => 'admin',
            ],
            [
                'username' => 'operator1',
                'password' => bcrypt('P@55word1'), // Password terenkripsi
                'level' => 'operator',
            ],
            [
                'username' => 'operator2',
                'password' => bcrypt('P@55word2'), // Password terenkripsi
                'level' => 'operator',
            ],
        ]);
    }
}
