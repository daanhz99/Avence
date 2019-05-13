<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestimonialMail extends Mailable
{
    use Queueable, SerializesModels;

	/**
	 * @var array
	 */
    protected $data;

    /**
     * Create a new message instance.
     *
	 * @param array $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
			->from('testimonials@avence.nl', 'Testimonial formulier Avence')
			->to('info@avence.nl', 'Info | Avence')
			->subject('Nieuwe testimonial')
			->view('mail.testimonial', $this->data);
    }
}
