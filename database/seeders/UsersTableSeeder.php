<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => String::random(10),
        //     'email' => String::random(10).'@gmail.com',
        //     'password' => bcrypt('secret')
        // ]);
        User::factory()->times(10)->create();
    }
}
