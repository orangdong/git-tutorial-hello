<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'nama' => 'Aviel',
            'umur' => '20',
            'divisi' => ' IT'
        ];
        
        Landing::create($data);
    }
}
