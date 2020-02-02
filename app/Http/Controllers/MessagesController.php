<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {

    	$this->validate($request,[

    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'required'

    	]);

    	$message = new Message;
		$message->name = $request->input('name'); 
		$message->email= $request->input('email'); 
		$message->message = $request->input('message'); 

		//save message
		$message->save();

		//redirect to homepage
		return redirect('/')->with('success','message sent');


    	/*return $request->input("name");
    	here this $request->input("name") return the input in the name field*/
    }
}
