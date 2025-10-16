<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ModuleSeeder;
    



class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
   
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // User::factory(10)->create();
        if (app()->environment('production')) {
            throw new \Exception('Do not run DatabaseSeeder on production');
        }
        $this 
            ->call(ModuleSeeder::class, false, ['count' => 10]);
    
    }
}
