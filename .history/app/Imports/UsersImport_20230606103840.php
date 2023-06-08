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
            //
            'id'
            'name'
            'email'
            `password
            ``two_factor_secret``two_factor_recovery_codes``two_factor_confirmed_at``phone_number``serial_number``city``country``communication``upline``profile_pictures``remember_token``created_at``updated_at``deactivated_at``deleted_at``level``wallet_amount``commission_percentage``commission_status``service``account_name``account_number``bank_name``role``usertype`
        ]);
    }
}
