<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Validator;
use App\Http\Requests;
use Mail;
use Session;
//use ValidatesRequests; // here also.
//use Illuminate\Foundation\Validation\ValidatesRequests;


class WebController extends Controller
{



    public function index()
    {
        return view('index');
    }

   


public function submit_contact_info(Request $request)
{  

      $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required|email',
            'Message' => 'required',
            'Subject' => 'required',
        ]);

    $data = array(
    'name' => $request->Name,
    'email' => $request->Email,
    'bodyMessage' => $request->Message,
     'messageSubject' => $request->Subject,
     'phoneNumber' => $request->Phone_number
    );

  Mail::send('emails.contact', $data, function($message) use ($data){
    $message->from('info@myseabacollege.org', 'Seaba Contact Form');
    $message->to('authemany2k@gmail.com', 'Management');
    $message->subject($data['messageSubject']);
  });

  // Mail::send('emails.contactfeedback', $data, function($message) use ($data){
  //     $message->from('info@myseabacollege.org', 'Seaba College');
  //     $message->to($data['email']);
  //     $message->subject('Thank you for contacting us');
  //   });

      \Session::flash('message', 'Thank you for contacting us. We will get back to you as soon as possible');
      return back();
}

}
