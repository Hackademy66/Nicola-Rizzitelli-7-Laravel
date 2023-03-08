<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        $games = Game::all();
        return view('welcome', ['games' => $games]);
    }
    public function contact_us(){
        return view('contact-us');
    }
    public function contact_us_submit(Request $request){
        // dd($request->all()); 

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->message;

        // dd($name, $email, $message);
        $user_data = compact('name', 'email', 'message');
        Mail::to($email)->send(new ContactMail($user_data));
        // reinderizzo l'utente alla homepage
        return redirect(route('homepage'))->with('emailSent', 'Email sent. Thank you.');
    }
}