<?php

namespace App\Http\Controllers;

use App\Models\Fruits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = DB::select('SELECT * FROM fruits');
        return view('pages.fruits', compact('fruits'));
    }

    public function back()
    {
        $fruits = DB::select('SELECT * FROM fruits');
        return view('pages.backOffice.fruits-back', compact('fruits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Fruits;
        $store->names = $request->names; 
        $store->numbers = $request->numbers; 
        $store -> save();
        return redirect('/back/fruits');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Fruits::find($id);
        return view('backOffice.show.fruits-show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruits $fruits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruits $fruits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruits $fruits)
    {
        //
    }
}
