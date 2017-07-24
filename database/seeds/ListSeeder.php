<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\List_List;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Lists')->delete();
        List_List::create([
            'login' => 'First Post',
            'password' => 'first-post',
            'email' => 'First Post body',
            'name' => 'Content First Post body',
            'surname' => 'hgjhg',
            'gen' => 'jj',
            'phone' => '89288888888',
        ]);
    }
}