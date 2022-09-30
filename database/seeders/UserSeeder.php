<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ustadz = User::create([
            'name' => 'Ustadz Role',
            'email' => 'ustadz@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $ustadz->assignRole('ustadz');


        $santri = User::create([
            'name' => 'Santri Role',
            'email' => 'santri@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $santri->assignRole('santri');
    }
}
