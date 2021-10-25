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
                'nomor_anggota'     => '123456789',
                'pangkat'           => 'kopral IT (admin)',
                'nrp'               => '987654321',
                'password'          => Hash::make('admin'),
                'role'              => 'admin',
                'phone'             => '082233795350',
            ],
            [
                'name'              => 'Derik Dwi Heavyanto',
                'nomor_anggota'     => '987654321',
                'pangkat'           => 'jendral',
                'nrp'               => '123456789',
                'password'          => Hash::make('jendral'),
                'role'              => 'komandan',
                'phone'             => '082233795350',
            ],
            [
                'name'              => 'Annga',
                'nomor_anggota'     => '12345',
                'pangkat'           => 'anggota',
                'nrp'               => '123456789',
                'password'          => Hash::make('user'),
                'role'              => 'anggota',
                'phone'             => '082233795350',
            ],
        ]);
    }
}
