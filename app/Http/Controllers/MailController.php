<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
    //



 public function create()
    {
        return view('about.contact');
    }

	public function store(ContactFormRequest $request)
	{

	    Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from('info@subopp.com');
	        $message->to('info@subopp.com', 'Admin')->subject('TODOParrot Feedback');
	    });

	    	$this->validate($request,[ 
	    	    'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        		]);

	  return Redirect::route('contact')->with('message', 'Thanks for contacting us!');

	}



}
