<?php

use Illuminate\Database\Seeder;

class UserSubcriptionPlan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Premium',
            'stripe_plan' => '10',
            'cost' => '10',
            'description' => 'Something About Package',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('plans')->insert([
            'name' => 'Pro',
            'stripe_plan' => '5',
            'cost' => '5',
            'description' => 'Something About Package',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
