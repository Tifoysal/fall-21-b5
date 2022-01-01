<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345'),
                'mobile'=>'016000000',
                'role'=>'admin'
            ]
        );


    }
}
