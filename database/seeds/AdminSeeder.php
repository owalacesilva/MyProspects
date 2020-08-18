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
            'display_name' => "Douglas Silva",
            'email' => "douglassurfista@hotmail.com",
            'username' => "douglassurfista",
            'password' => Hash::make('@G3wconcept'),
            'whatsapp' => "11988887777",
        ]);
    }
}
