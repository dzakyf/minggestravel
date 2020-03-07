<?php

use Illuminate\Database\Seeder;

class AdminCredential extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'mingges@gmail.com',
            'password' => Hash::make('rahasia'),
        ]); 
    }
}
