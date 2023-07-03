<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\AccountExpired;
use Illuminate\Support\Facades\Mail;



class UpdatePaymentStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    /**
     * The console command description.
     *
     * @var string
     */

    protected $signature = 'payment:update';
    protected $description = 'Update payment status for users who haven\'t paid within 72 hours';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $lastUserId = User::latest('id')->pluck('id')->first();

        $users = User::where('payment_status', 'pending')
            ->where('usertype', 'user')
            ->where('created_at', '<=', Carbon::now()->subHours(72))
            ->get();

        foreach ($users as $user) {
            $user->id = $lastUserId + 1;
            $user->payment_status = 'expired';
            $user->deactivated_at = now();
            $user->save();

            // Update the serial number
            $user->serial_number = 'SN-' . ($lastUserId + 1);
            $user->save();

            // Send the account expiration email
            $this->sendAccountExpiredEmail($user);

            $lastUserId++;
        }

        $this->info('Payment status and serial numbers updated successfully.');
    }

    private function sendAccountExpiredEmail(User $user)
    {
        // Prepare data for the email


        // Send the email using the account_expired template
        // Mail::send('emails.account_expired', $data, function ($message) use ($user) {
        //     $message->to($user->email, $user->name)
        //         ->subject('Your Account Has Expired');
        // });
        Mail::to($user->email)->send(new AccountExpired($user, $user->));

    }
}
