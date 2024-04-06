<?php

namespace App\Mail;


use App\Models\seo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\facades\Crypt;


class RegMail extends Mailable
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


        echo "Go to your email to access to Iframe Log_in";


$SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }


        $email=base64_decode($_GET['QR']);

        return $this->view('mail.mailreg',[

            'Domain_site'=>$Domain_site ,

            'QR'=>$_GET['QR'] 
  
           ])

        ->to($email)

       ->subject('IFRAME ACCESS LINK');



    }
}
