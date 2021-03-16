<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id_user = 123456;
        $user->id = 123456;
        $user->name = 'superuser';
        $user->email = 'superuser@mail.com';
        $user->password = Hash::make('superuser');       
        $user->save();
    }
}
