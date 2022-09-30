<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);



        kategori::create([
            'kategori'=>'Aksara Jawa',
            'slug' => 'aksara-jawa'
        ]);
        kategori::create([
            'kategori'=>'Pasangannya',
            'slug' => 'pasangannya'
        ]);
        kategori::create([
            'kategori'=>'Aksara Jawa dan Pasangannya',
            'slug' => 'aksara-jawa-dan-pasangannya'
        ]);
        
    }
}
