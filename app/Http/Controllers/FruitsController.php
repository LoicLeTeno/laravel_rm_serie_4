<?php

namespace App\Http\Controllers;

use App\Models\Fruits;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.fruits');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function show(Fruits $fruits)
    {
        //
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
