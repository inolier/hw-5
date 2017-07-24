<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use app\Models\List_List;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $this->call('ListSeeder');

         }
}
