<?php

namespace App\Http\Controllers;

use App\Models\Legumes;
use Illuminate\Http\Request;

class LegumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legumes = Legumes::all();
        return view('pages.legumes', compact('legumes'));
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
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function show(Legumes $legumes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function edit(Legumes $legumes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Legumes $legumes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Legumes $legumes)
    {
        //
    }
}
