<?php

namespace App\Console\Commands;

use App\Mail\ContactForm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTestMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendtestmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email';

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
        Mail::to(config('mail.contact_form_to_address'))->send(new ContactForm([
            'firstName' => 'testFirst',
            'lastName' => 'testLast',
            'email' => 'testEmail@email.com',
            'phone' => '12345567678',
            'subject' => 'Test Subject',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent leo sapien, efficitur eu finibus ut, semper in mauris. Quisque lacinia libero bibendum porttitor pulvinar. Nunc ac nunc nec magna consequat suscipit nec in lectus. Nam vel malesuada justo, ac congue dui. Sed blandit augue a ante feugiat, tristique malesuada ligula sagittis. Morbi scelerisque finibus erat, varius consectetur orci viverra non. Etiam consectetur libero et euismod porttitor. Sed tristique blandit quam, sed tincidunt magna convallis hendrerit. Etiam dolor eros, egestas in egestas id, convallis in erat.

            Donec volutpat dapibus odio, vel ullamcorper mauris accumsan id. Morbi at laoreet leo, in ornare lorem. Maecenas vel pretium ante, nec sagittis elit. Donec hendrerit, diam at porttitor convallis, nibh augue ultricies arcu, et faucibus justo sapien in dolor. Nam justo mauris, porta id nulla eget, luctus imperdiet ipsum. Praesent interdum euismod tellus id faucibus. In luctus nisl et ultrices consequat. Phasellus non dolor vitae est aliquet eleifend non ut ex. Ut non bibendum massa, eget pellentesque nisl. In rutrum elementum elit id porttitor. Nam aliquam iaculis eleifend. Fusce eget aliquam erat. Cras scelerisque leo ac interdum consectetur.',
        ]));

        return Command::SUCCESS;
    }
}
