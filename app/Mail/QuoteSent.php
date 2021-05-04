<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Quote;

class QuoteSent extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * The order instance.
     *
     * @var \App\Models\Quote
     */
    protected $quote;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject('New Quote Enquiry Mail')
            ->markdown('emails.quote')
            ->with('enquiry', $this->quote);
    }
}
