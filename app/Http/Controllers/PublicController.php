<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Consolex;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        $games = Game::take(3)->get();
        $consolexes = Consolex::take(3)->get();


        return view('welcome', compact('games', 'consolexes'));
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