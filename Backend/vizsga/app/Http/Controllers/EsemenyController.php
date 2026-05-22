<?php

namespace App\Http\Controllers;

use App\Models\Esemeny;
use App\Http\Requests\StoreEsemenyRequest;
use App\Http\Requests\UpdateEsemenyRequest;
use App\Models\Kategoria;

class EsemenyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  return response()->json(Kategoria::with('esemeny')->get());
          return response()->json(Esemeny::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEsemenyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Esemeny $esemeny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEsemenyRequest $request, Esemeny $esemeny)
    {
              $esemeny = Esemeny::findOrFail();
            $esemeny->update($request->all());
            return response()->json($esemeny);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esemeny $esemeny, $id)
    {
        Esemeny::findOrFail($id)->delete();
            return response()->json(['message' => 'Esemeny Torolve!']);
    }
}
