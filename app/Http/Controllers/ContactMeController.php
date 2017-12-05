<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\ContactUS;
use Mail;
use Validator;

class ContactMeController extends Controller
{
    public function contactMe()
    {
        return;
    }


    public function SendEmail(Request  $request)
    {

        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('#contacts')
                ->withErrors($validator)
                ->withInput();
        }
        else{

            $data =  array(
                'subject' => $request->get('subject'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            );

            Mail::send('emails.email', $data, function($message) use ($data)
            {

                $message
                    ->from($data['email'], 'BesideMe Website')
                    ->to('augustinas.simelionis@gmail.com', 'BesideMe Admin')
                    ->subject($data['subject']);

            });
            return redirect('#contacts')
                ->with('success', ['Email sent successfully.']);
        }
    }
}