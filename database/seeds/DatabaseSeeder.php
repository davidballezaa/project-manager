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
        factory(App\City::class, 80)->create();
        factory(App\Company::class, 20)->create();
        App\User::create([
            'name'      => 'David Balleza'
        ]);
        factory(App\User::class, 2)->create();
        factory(App\Project::class, 10)->create();
    }
}
