<?php

namespace App\Http\Controllers;

use App\Models\Kritiksaran;
use App\Http\Requests\StoreKritiksaranRequest;
use App\Http\Requests\UpdateKritiksaranRequest;

class KritiksaranController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKritiksaranRequest $request)
    {
        Kritiksaran::create([
            'nama' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKritiksaranRequest $request, Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritiksaran $kritiksaran)
    {
        //
    }
}
