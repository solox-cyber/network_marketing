<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendPaymentReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        ->whereDate('created_at', '=', Carbon::now()->subDays(6)->toDateString())
        ->get();

    foreach ($users as $user) {
        // Prepare data for the email
        $data = [
            'userName' => $user->name,
            'serialNumber' => $user->serial_number,
        ];

        // Send the email using the PaymentReminder mail class
        Mail::to($user->email, $user->name)
            ->send(new PaymentReminder($data));
    }

    $this->info('Payment reminders sent successfully.');
}
}
