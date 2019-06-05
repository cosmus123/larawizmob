<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;

use App\Mail\WelcomeContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function store(Request $request){



    	//Validate the input fields

    	$this->validate($request,[

    		'name' => 'required',
    		'email' => 'required',
    		'website' => 'required',
    		'description' => 'required'

    	]);


         //Send email

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'description' => $request->description
        );

        Mail::send('mail.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('cosminmus@productsandservices.eu.com');
            $message->subject($data['description']);

        });

    	//Create a post using request data
    	//Save the data to the database
    	//And then rediret to the contact page

    	//dd(request()->all());
    	$contact= new Contact;

    	$contact->name = request('name');
    	$contact->email = request('email');
    	$contact->website = request('website');
    	$contact->description = request('description');

    	$contact->save();

       
        //Update with flash message
    	$request->session()->flash('success', 'Form has been submitted to MySQL database and via Email !');
    	
        return redirect('/');


        }

}
