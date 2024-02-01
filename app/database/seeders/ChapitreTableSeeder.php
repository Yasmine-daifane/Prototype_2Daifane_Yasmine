<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChapitreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $now = Carbon::now();

        DB::table("chapitres")->insert([
            [
                'Titre' => 'modelbinding',
                'ordre' => '2',
                'description' => 'modelbindingmodelbinding',
                'autoformation_id' => 1,
                'created_at' => $now
              
            ],
            [
                'Titre' => 'modelbinding',
                'ordre' => '2',
                'description' => 'modelbindingmodelbinding',
                'autoformation_id' => 2,
                'created_at' => $now
            ],
            [
                'Titre' => 'modelbinding',
                'ordre' => '2',
                'description' => 'modelbindingmodelbinding',
                'autoformation_id' => 1,
                'created_at' => $now
            ]
        ]);
    }
}

