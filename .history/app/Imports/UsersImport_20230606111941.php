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
        $user = new User([
            'id' => $row[0] ?? null,
            'name' => $row[1] ?? null,
            'email' => $row[2] ?? null,
            'password' => $row[3] ?? null,
            'two_factor_secret' => $row[4] ?? null,
            'two_factor_recovery_codes' => $row[5] ?? null,
            'two_factor_confirmed_at' => $row[6] ?? null,
            'phone_number' => $row[7] ?? null,
            'serial_number' => $row[8] ?? null,
            'city' => $row[9] ?? null,
            'country' => $row[10] ?? null,
            'communication' => $row[11] ?? null,
            'upline' => $row[12] ?? null,
            'profile_pictures' => $row[13] ?? null,
            'remember_token' => $row[14] ?? null,
            'created_at' => $row[15] ?? null,
            'updated_at' => $row[16] ?? null,
            'deactivated_at' => $row[17] ?? null,
            'deleted_at' => $row[18] ?? null,
            'level' => $row[19] ?? null,
            'wallet_amount' => $row[20] ?? null,
            'commission_percentage' => $row[21] ?? null,
            'commission_status' => $row[22] ?? null,
            'service' => $row[23] ?? null,
            'account_name' => $row[24] ?? null,
            'account_number' => $row[25] ?? null,
            'bank_name' => $row[26] ?? null,
            'role' => $row[27] ?? null,
            'usertype' => $row[28] ?? null
        ]);

        return $user;
    }

}
