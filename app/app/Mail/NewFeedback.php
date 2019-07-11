<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewFeedback extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * The feedback sender's email.
     *
     * @var Email
     */
    protected $email;

     /**
     * The feedback sender's message.
     *
     * @var Message
     */
    public $message;

    /**
     * Create a new message instance.
     *
     * @var $email feedback author's email
     * @var $message feedback author's message
     * @return void
     */
    public function __construct($email, $message)
    {
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     * This is where all configuration of $this is done.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->markdown('emails.notifications.new_feedback');
    }
}
