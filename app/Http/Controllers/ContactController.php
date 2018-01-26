<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use Session;

use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{
    public function getContact() {
      return view("contact")->withTitle('Contact');
    }

    public function postContact(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'subject' => 'min:1',
        'comment' => 'min:1']);

      $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'comment' => $request->comment
      );

      Mail::send('emailform', $data, function($message) use ($data) {
        $message -> from($data['email']);
        $message -> to('fcb@franklinchristopherbrooks.com');
        $message -> subject($data['subject']);
      });

      Session::flash('success', 'Your email was sent!');

      return redirect('/')->withTitle('Home');
    }

}
