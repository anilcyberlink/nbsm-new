<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
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
    public function build(Request $request)
    {
          $emailfrom = env('MAIL_USERNAME');
        $message_order = env('MESSAGE_ORDER');
        return $this->from($emailfrom)
        ->view('emails.contact',[
            'email' => $request->email,
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'phone' => $request->phone,
        'address' => $request->address,
        'town' => $request->town,
        'job_title' => $request->job_title,
        'company' => $request->company,
        'post_code' => $request->post_code,
        'country' => $request->country,
        'comments' => $request->comments
            ])
        ->subject($message_order);
       
    }
}
