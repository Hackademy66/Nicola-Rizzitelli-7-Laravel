<?php

namespace App\Http\Controllers;

use App\Models\Consolex;
use Illuminate\Http\Request;

class ConsolexController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consolexes = Consolex::all();

        return view('consolex.index', compact('consolexes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consolex.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $console = Consolex::create([
            'name' =>$request->name,
            'brand' =>$request->brand,
            'logo' =>$request->file('logo')->store('public/logos'),
            'description' =>$request->description,            
        ]);
        return redirect(route('homepage'))->with('consolexCreated', 'You have successfully created a console.
        ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consolex $consolex)
    {
        return view('consolex\show', compact('consolex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consolex $consolex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consolex $consolex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consolex $consolex)
    {
        //
    }
}
