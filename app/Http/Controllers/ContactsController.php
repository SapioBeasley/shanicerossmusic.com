<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
	public function send(Request $request)
	{
		$user = $request->all();

		\Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
			$m->from($user['email'], 'User Contact');

			$m->to('info@sapioweb.com', 'User Contact')->subject('New Website Contact');
		});

		return redirect()->back()->with('success_message', 'Your message has been successfully sent...');
	}
}
