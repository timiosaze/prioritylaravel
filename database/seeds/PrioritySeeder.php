<?php

use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create()->each(function ($user) {
            $user->priorities()->saveMany(factory(App\Priority::class, 10)->make());
        });
    }
}
