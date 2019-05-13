<?php

namespace App\Http\Controllers;

use App\Mail\TestimonialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

	/**
	 * Sends notification mail
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function send(Request $request) {
		$data = $request->all();

		Mail::send(new TestimonialMail($data));

		return view('portal.pages.testimonials', ['success' => true]);
	}
}
