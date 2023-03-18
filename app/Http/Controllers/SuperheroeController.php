<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['superheroes2']=Superheroe::paginate(7);
        return view('superheroe.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superheroe.create');
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
        $datosSuperHeroe = request()->except('_token');

        Superheroe::insert($datosSuperHeroe);
        return response()->json($datosSuperHeroe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function show(Superheroe $superheroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $superheroe=Superheroe::findOrfail($id);
        return view('superheroe.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperHeroe = request()->except(['_token', '_method']);
        Superheroe::where('id','=',$id)->update($datosSuperHeroe);

        Superheroe::where('id','=',$id)->update($datosSuperHeroe);
        $superheroe=Superheroe::findOrfail($id);
        return view('superheroe.edit', compact('superheroe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $superheroe=Superheroe::findOrfail($id);
        Superheroe::destroy($id);
        return redirect('superheroe');
    }
}
