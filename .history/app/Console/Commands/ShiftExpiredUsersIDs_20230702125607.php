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
            $newId = ++$lastUserId;

            // Update user_id in Contact table
            $contactUpdates = Contact::where('user_id', $user->id);


            // Output the contact and wallet statement update counts
            $this->info("Contact updates:"{$contactUpdates});

        }

        $this->info('ID positions of expired users have been shifted successfully.');
    }
}
