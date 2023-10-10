<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

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
        Pemain::create(
            // [
            //     'id' => '01',
            //     'nama_pemain' => 'owen',
            //     'no_punggung' => '19',
            //     'posisi' => 'back'
            // ],
            // [
            //     'id' => '02',
            //     'nama_pemain' => 'andrew',
            //     'no_punggung' => '0',
            //     'posisi' => 'kiper'
            // ],
            [
                'id' => '03',
                'nama_pemain' => 'jerry',
                'no_punggung' => '43',
                'posisi' => 'back'
            ],
            );
    }
}
