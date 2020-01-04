<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'vishal',
            'email' => 'vishal@test.lk',
            'city' => 'kurunegala',
            'phone' => '0758945785',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'usertype' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
