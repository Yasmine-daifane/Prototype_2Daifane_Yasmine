<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Carbon\Carbon;
class AutoformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table("autoformations")->insert([
            [
            

                'Titre' => 'Laravel',
                'Date_de_creation' => now(),
                'Date_modification' => now(),
                'reference' => 'DW',
                'description' => 'Description for Autoformation 1',
               
            ],
            [
                'Titre' => 'Laravel2',
                'Date_de_creation' => now(),
                'Date_modification' => now(),
                'reference' => 'DM',
                'description' => 'Description for Autoformation 1',
             
            ],
            [
                'Titre' => 'Laravel3',
                'Date_de_creation' => now(),
                'Date_modification' => now(),
                'reference' => 'Dn',
                'description' => 'Description for Autoformation 1',
               
            ]
        ]);

}}
