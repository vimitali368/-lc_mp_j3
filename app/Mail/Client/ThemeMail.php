<?php

namespace App\Mail\Client;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThemeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $theme_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($theme_id)
    {
        //
        $this->theme_id = $theme_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.client.theme');
    }
}
