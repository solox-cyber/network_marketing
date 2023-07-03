<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ShiftExpiredUsersIDs extends Command
{
    protected $signature = 'users:shift-ids';
    protected $description = 'Automatically shift ID positions of expired users';

    public function handle()
    {
        $expiredUsers = User::where('payment_status', 'expired')
            ->where('usertype', 'user')
            ->get();

        $lastUserId = User::max('id');

        foreach ($expiredUsers as $user) {
            $user->id = ++$lastUserId;
            $user->save();
        }

        $this->info('ID positions of expired users have been shifted successfully.');
    }
}
