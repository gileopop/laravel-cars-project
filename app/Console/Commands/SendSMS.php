<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendSMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS';

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
        if (env('SMS_DRIVER') === 'twilio') {
            // Use Twilio to send SMS
        } else {
            // Log the SMS
        }
    }
}
