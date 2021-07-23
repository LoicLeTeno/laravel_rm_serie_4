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
    public function edit($id) 
    {
        $edit = Fruits::find($id);
        return view('backOffice.edit.fruits-edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Fruits::find($id);
        $update->names = $request->names; 
        $update->numbers = $request->numbers; 
        $update -> save();
        return redirect('/back/fruits/show/'. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Fruits::find($id);
        $destroy -> delete();
        return redirect('/back/fruits');
    }
}
