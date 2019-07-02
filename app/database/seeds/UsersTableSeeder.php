<?php

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
        $user = new App\User();
        $user->password = Hash::make('123456789');
        $user->email = 'superuser@storonnimv.com';
        $user->name = 'Superuser';
        $user->save();
    }
}
