<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
     use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (app()->environment('production')) {
            throw new \Exception('Do not run DatabaseSeeder on production');
        };
        DB::table('modules')->insert([
            ['name' => 'URL Shortener', 'description' => 'Raccourcir et gérer des liens'],
            ['name' => 'Wallet', 'description' => 'Gestion du solde et transferts'],
            ['name' => 'Marketplace + Stock Manager', 'description' => 'Gestion de produits et
            commandes'],
            ['name' => 'Time Tracker', 'description' => 'Suivi du temps et session'],
            ['name' => 'Investment Tracker', 'description' => 'Suivi du portefeuille d\'investissement'],
        ]);
    }
}
