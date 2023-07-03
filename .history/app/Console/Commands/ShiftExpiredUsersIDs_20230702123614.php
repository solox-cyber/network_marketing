<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Contact;
use App\Models\WalletStatement;
use App\Models\ProfilePicture;
use App\Models\Commission;

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

            // Update user_id in Contact table
            Contact::where('user_id', $user->id)
                ->update(['user_id' => $user->id]);

            // Update user_id in WalletStatements table
            WalletStatement::where('user_id', $user->id)
                ->update(['user_id' => $user->id]);

            // Update user_id in ProfilePictures table
            ProfilePicture::where('user_id', $user->id)
                ->update(['user_id' => $user->id]);

            // Update user_id in Commissions table
            Commission::where('user_id', $user->id)
                ->update(['user_id' => $user->id]);
        }

        $this->info('ID positions of expired users have been shifted successfully.');
    }
}
