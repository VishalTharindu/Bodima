<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableDataSeeder::class,
            AdminUserDataSeeder::class,
            UserSubcriptionPlan::class
            // PostsTableSeeder::class,
            // CommentsTableSeeder::class,
        ]);
    }
}
