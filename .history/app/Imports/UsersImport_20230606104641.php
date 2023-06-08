<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'password' => $row[3],
            'two_factor_secret' => $row[4],
            'two_factor_recovery_codes' => $row[5],
            'two_factor_confirmed_at' => $row[6],
            'phone_number' => $row[7],
            'serial_number' => $row[8],
            'city' => $row[9],
            'country' => $row[10],
            'communication' => $row[11],
            'upline' => $row[12],
            'profile_pictures' => $row[13],
            'remember_token' => $row[14],
            'created_at' => $row[15],
            'updated_at' => $row[16],
            'deactivated_at' => $row[17],
            'deleted_at' => $row[18],
            'level' => $row[19],
            'wallet_amount' => $row[20],
            'commission_percentage' => $row[21],
            'commission_status' => $row[22],
            'service' => $row[23],
            'account_name' => $row[24],
            'account_number' => $row[25],
            'bank_name' => $row[26],
            'role' => $row[27],
            'usertype' => $row[28]
        ]);
    }
}
