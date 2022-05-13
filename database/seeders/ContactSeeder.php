<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'title' => 'Test',
            'S_text' => 'Test for short text.',
            'text' => 'Test for text.',
            'C_address' => 'Test for address.',
            'C_info' => 'Test for info.'
        ]);
    }
}
