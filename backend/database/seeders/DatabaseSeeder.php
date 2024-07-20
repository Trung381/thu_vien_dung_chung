<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Test;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $file = './database/seeders/data.json';
        $jsonContent = file_get_contents($file);
        $dataArray = json_decode($jsonContent,true);
        foreach($dataArray['tests'] as $row) {
            Test::create([
                "name" => $row['name']
            ]);
        }
    }
}
