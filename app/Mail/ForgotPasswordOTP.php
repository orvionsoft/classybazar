<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Customer;

class ForgotPasswordOTP extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;

    /**
     * Create a new message instance.
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Password Reset OTP - ' . config('app.name'))
                    ->view('emails.forgot-password-otp')
                    ->with([
                        'customer' => $this->customer,
                    ]);
    }
}
