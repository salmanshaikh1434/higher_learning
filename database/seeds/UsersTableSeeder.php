<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            "name" => "shaikh Faiyaz Ahemad",
            "email" => "fayyaztech@gmail.com",
            "password" => Hash::make("12345")
        ];
        User::create($user);
    }
}
