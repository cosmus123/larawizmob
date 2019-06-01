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



    	//Validate the fields

    	$this->validate(request(),[

    		'name' => 'required',
    		'email' => 'required',
    		'website' => 'required',
    		'description' => 'required'

    	]);

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

        // $user = User::create(
        //        request(['name'],['email'],['website'],['description']) 
        // );

        //  Mail::to($request->user())->send(new WelcomeContact);

        $mail = 'cosminmus@productsandservices.eu.com';
        Mail::to($mail)->send(new WelcomeContact);


    	$request->session()->flash('success', 'Form has been submitted to MySQL database and via Email !');
    	
        return redirect('/');


        }

}
