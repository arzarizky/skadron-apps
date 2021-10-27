<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Hash;
class UsersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[1]) || $row[1] == "") {
            return null;
        }

        return new User([
            'name'              => $row[0], 
            'nomor_anggota'     => $row[1], 
            'pangkat'           => $row[2],  
            'kualifikasi'       => $row[3], 
            'nrp'               => $row[4], 
            'password'          => Hash::make($row[8]),
            'role'              => $row[6], 
            'phone'             => $row[5], 
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
