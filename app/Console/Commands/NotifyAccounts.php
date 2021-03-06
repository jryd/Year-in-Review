<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Mail;
use App;

class NotifyAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'accounts:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email to all accounts to let them know of their login details.';

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
     * @return mixed
     */
    public function handle()
    {
        if (App::environment('local'))
        {
            $users = User::where('email', '=', 'james.bannister@trademe.co.nz')->get();
            $bar = $this->output->createProgressBar(count($users));
            
            foreach ($users as $user)
            {
                $data = ['first_name' => $user->first_name, 'email' => $user->email, 'password' => $user->seed_password];
                Mail::send('emails.manager_account', $data, function($message) use ($user) {
                    $message->to($user->email, $user->first_name . ' ' . $user->last_name);
                    $message->subject('Welcome to Year in Review');
                });
                $bar->advance();
            } 
            
            $bar->finish();
            $this->info(' You, Sir, have been notified of your account as we are in a local environment.');
        }
        else
        {
            $users = User::all();
            $bar = $this->output->createProgressBar(count($users));

            foreach ($users as $user)
            {
                $data = ['first_name' => $user->first_name, 'email' => $user->email, 'password' => $user->seed_password];
                if ($user->role_id < 5)
                {
                    Mail::send('emails.csr_account', $data, function($message) use ($user) {
                        $message->to($user->email, $user->first_name . ' ' . $user->last_name);
                        $message->subject('Welcome to Year in Review');
                    });
                }
                else
                {
                    Mail::send('emails.manager_account', $data, function($message) use ($user) {
                        $message->to($user->email, $user->first_name . ' ' . $user->last_name);
                        $message->subject('Welcome to Year in Review');
                    });
                }
                    
                $bar->advance();
            } 
            $bar->finish();
            $this->info(' All accounts have been notified.');
        }
    }
}
