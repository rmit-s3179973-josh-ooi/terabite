<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountVerification extends Mailable
{
    use Queueable, SerializesModels;

    private $link;
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link, User $user)
    {
        $this->link = $link;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.verification')->with(
            [
                'link' => $this->link,
                'name' => $this->user->name,
            ]);
    }
}
