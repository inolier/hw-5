<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->delete();
        Client::create([
            'login' => 'Second Post',
            'password' => 'first-post',
            'email' => 'First Post body',
            'name' => 'Content First Post body',
            'surname' => 'hgjhg',
            'gen' => 'jj',
            'phone' => '89288888888',
        ]);
    }
}