<?php

namespace App\Http\Controllers;

use App\Models\Alimentos;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alimentos = Alimentos::orderBy('id')->get();

        return response()->json($alimentos);
    }

    public function indexFull()
    {
        $alimentos = Alimentos::with('categoria')->orderBy('id')->get();

        return response()->json($alimentos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $alimentos = Alimentos::findOrFail($id);
        
        return response()->json($alimentos);
    }

    public function showFull($id)
    {
        $alimento = Alimentos::with('categoria')->findOrFail($id);

        return response()->json($alimento);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alimentos $alimentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alimentos $alimentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alimentos $alimentos)
    {
        //
    }
}
