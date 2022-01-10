<?php

namespace App\Mail;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('enquiry@crystal-group.in')
            ->subject('New Customer Equiry')
            ->replyTo($this->contact->email, $this->contact->name)
            ->view('admin.contact.send_mail')->with('contact', $this->contact);
    }
}
