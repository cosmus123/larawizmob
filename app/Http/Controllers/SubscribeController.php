<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function send_first(Request $request){



    	//Validate the input fields

    	$this->validate($request,[

    		'name' => 'required',
    		'email' => 'required',
    	]);


         //Send email

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
        );

        Mail::send('mail.subscribe', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('cosminmus@productsandservices.eu.com');
            $message->subject($data['name']);

        });
       
        //Update with flash message
    	$request->session()->flash('successfirst', 'You have been subscribed to our mail !');
    	
        return redirect('/');


        }

        public function send_second(Request $request){



            //Validate the input fields
    
            $this->validate($request,[
    
                'name' => 'required',
                'email' => 'required',
            ]);
    
    
             //Send email
    
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
            );
    
            Mail::send('mail.subscribe', $data, function ($message) use ($data) {
                $message->from($data['email']);
                $message->to('cosminmus@productsandservices.eu.com');
                $message->subject($data['name']);
    
            });
           
            //Update with flash message
            $request->session()->flash('successsecond', 'You have been subscribed to our mail !');
            
            return redirect('/');
    
    
            }
}
