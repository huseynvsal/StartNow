<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Vüsal';
        $email = 'huseynlivusal25@gmail.com';
        $password = 'v357usal';
        $password = \Illuminate\Support\Facades\Hash::make($password);
        $add = new \App\User();
        $add->name = $name;
        $add->email = $email;
        $add->password = $password;
        $add->save();

    }
}
