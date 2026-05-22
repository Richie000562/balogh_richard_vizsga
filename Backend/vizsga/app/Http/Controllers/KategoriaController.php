<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use App\Http\Requests\StoreKategoriaRequest;
use App\Http\Requests\UpdateKategoriaRequest;
use App\Models\Esemeny;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    return response()->json(Kategoria::all());
        return response()->json(Esemeny::with('kategoria')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( Kategoria $kategoria, $id)
    {
         $kategoria = Kategoria::findOrFail($id);   
            return response()->json($kategoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriaRequest $request, Kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoria $kategoria)
    {
        //
    }
}
