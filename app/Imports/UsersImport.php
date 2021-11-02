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
            'pangkat'           => $row[1],  
            'kualifikasi'       => $row[2], 
            'nrp'               => $row[3], 
            'password'          => Hash::make($row[6]),
            'role'              => $row[5], 
            'phone'             => $row[4], 
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
