<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    public function create(){
        return view('game.create');
    }
    public function store(GameRequest $request){


        // dd($request->all());

        $game = Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'description' => $request->description,
            'cover' => $request->file('cover')->store('public/covers'), //metodo per recuperare file di percorso dell'immagine
        ]);

        return redirect(route('homepage'))->with('gameCreated', "Game added successfully!");

    }
}
