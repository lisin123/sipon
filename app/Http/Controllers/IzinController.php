<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\IjinKegiatan;
use Illuminate\Http\Request;
use App\Models\IjinPulangCuti;
use App\Http\Controllers\Controller;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $kegiatans = IjinKegiatan::with('Santri', 'Kegiatan')->get();
        $pulangs = IjinPulangCuti::with('Santri')->get()->where('type', 'P');
        $cutis = IjinPulangCuti::with('Santri')->get()->where('type', 'C');
        
        return view('contents.izin')->with(compact('kegiatans', 'pulangs', 'cutis'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
