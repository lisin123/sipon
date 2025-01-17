<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\IjinPulangCuti;
use Illuminate\Routing\Controller;

class KedatanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $month = Carbon::today()->subDays(30);
        $konfirmasi = IjinPulangCuti::with('Santri')->where('is_come', 'False')->get();
        $riwayat = IjinPulangCuti::with('Santri')->where('finish_date', '>=', $month)->where('is_come', 'True')->get();
        

        return view('contents.datang')->with(compact('konfirmasi', 'riwayat'));
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
