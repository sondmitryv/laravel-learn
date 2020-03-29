<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'New Well',
            'created_at' => Date('Y-m-d H:i:s')
        ]);
    }
}
