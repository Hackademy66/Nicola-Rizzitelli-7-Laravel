<?php

namespace App\Http\Controllers;

use App\Models\Consolex;
use Illuminate\Http\Request;

class ConsolexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Consolex $consolex)
    {
        //
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
