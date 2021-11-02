<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'              => 'Arza Rizky Nova Ramadhani',
                'pangkat'           => 'Mayor Nav',
                'nrp'               => '987654321',
                'phone'             => '082244862271',
                'kualifikasi'       => 'Check Pilot',
                'foto'              => 'Check Pilot',
                'password'          => Hash::make('admin'),
                'role'              => 'admin',
                'phone'             => '082233795350',
                'kualifikasi'       => 'Check Pilot',
                'foto'              => 'Check Pilot',
            ],
            [
                'name'              => 'Derik Dwi Heavyanto',
                'pangkat'           => 'jendral',
                'nrp'               => '123456789',
                'password'          => Hash::make('jendral'),
                'role'              => 'komandan',
                'phone'             => '082244862271',
                'kualifikasi'       => 'Check Pilot',
                'foto'              => 'Check Pilot',
            ],
            [
                'name'              => 'Annga',
                'pangkat'           => 'anggota',
                'nrp'               => '123456789',
                'password'          => Hash::make('user'),
                'role'              => 'anggota',
                'phone'             => '082233795350',
                'kualifikasi'       => 'Check Pilot',
                'foto'              => 'Check Pilot',
            ],
        ]);
    }
}
