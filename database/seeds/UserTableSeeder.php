<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'     =>   'chithu',
            'email'    =>   'chithiraijothi07@gmail.com',
            'password' =>   Hash::make('password'),
            
            
            ]);
    }
}
