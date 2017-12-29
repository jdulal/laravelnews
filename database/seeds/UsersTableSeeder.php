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
        DB::table('users')->insert([
            'name'=>'jagadish',
            'email'=>'jdulal@bracesmedia.com',
            'password'=>bcrypt('dulal')
        ]);
    }
}
