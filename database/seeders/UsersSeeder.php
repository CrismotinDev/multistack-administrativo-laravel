<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'id' => 1,
            'name' => 'cris',
            'email' => 'crismotin2019@rpinfo.com.br',
            'password' => 'super',

        ]);
    }
}
