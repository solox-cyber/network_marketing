<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\AccountExpired;


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
    $users = User::where('payment_status', 'pending')
        ->where('created_at', '<=', Carbon::now()->subHours(72))
        ->get();

    foreach ($users as $user) {
        
        $user->payment_status = 'expired';
        $user->save();
    }

    $this->info('Payment status updated successfully.');
}
}
