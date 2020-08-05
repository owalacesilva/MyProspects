<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'display_name' => "Douglas",
            'email' => 'douglas@gmail.com',
            'username' => "admindouglas",
            'password' => Hash::make('douglas123'),
            'whastapp' => "11988887777",
        ]);
    }
}
