<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Utwórz nową wiadomość e-mail.
     *
     * @param  array  $data
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Zbuduj wiadomość e-mail.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.call-contact-form')
                    ->with('data', $this->data);
    }
}
