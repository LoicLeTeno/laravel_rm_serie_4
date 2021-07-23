<?php

namespace App\Http\Controllers;

use App\Models\Legumes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legumes = DB::select('SELECT * FROM legumes');
        return view('pages.legumes', compact('legumes'));
    }

    public function back()
    {
        $legumes = DB::select('SELECT * FROM legumes');
        return view('pages.backOffice.legumes-back', compact('legumes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Legumes;
        $store->names = $request->names; 
        $store->numbers = $request->numbers; 
        $store -> save();
        return redirect('/back/legumes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Legumes::find($id);
        return view('backOffice.show.legumes-show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $edit = Legumes::find($id);
        return view('backOffice.edit.legumes-edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Legumes::find($id);
        $update->names = $request->names; 
        $update->numbers = $request->numbers; 
        $update -> save();
        return redirect('/back/legumes/show/{id}');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Legumes  $legumes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Legumes::find($id);
        $destroy -> delete();
        return redirect('/back/legumes');
    }
}
