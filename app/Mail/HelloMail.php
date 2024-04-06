<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $mail=$_GET['email'];
        return $this->view('mail.mailtheme')
        ->to($mail)
       ->subject('this is text email');



        // $variable = 'Hello world!'; // A variable which can be use inside email blade template.
        // Mail::send('mail.mailtheme',new HelloMail(),['variable' => $variable], function ($message) {
        //  $message->from('amrrockstar0@gmail.com');
        //  $message->sender('mail.mailtheme');
        //  $message->to('amrrockstar0@gmail.com');
        //  $message->subject('Hello World') ;
        //  });



    }
}
