<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    User::create([
    //        'name' => 'Bioskopy',
    //        'email' => 'bioskopy@gmail.com',
    //        'password' => Hash::make('123')
    //    ]);
    \App\Models\User::factory(10)->create();

       $this->call(ServicesSeeder::class);

    }
}
