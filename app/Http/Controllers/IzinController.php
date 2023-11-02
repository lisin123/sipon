<?php

namespace App\Http\Controllers;

use App\Models\IjinKegiatan;
use App\Models\santri;
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
        $santri = santri::all();
        $kegiatans = IjinKegiatan::with('Santri', 'Kegiatan')->get();
        $pulangs = IjinPulangCuti::with('Santri')->get()->where('type', 'P')->where('is_come', 'False');
        $cutis = IjinPulangCuti::with('Santri')->get()->where('type', 'C')->where('is_come', 'False');
        
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
        $cek=Santri::where('nis',$request->nis)->count();
        if($cek==1){

            $this->validate($request,[
                'nis' => 'required',
                'id_act' => 'required',
                'date' => 'required',
                'reason' => 'required',
            ]);
    
            $acts = new IjinKegiatan;
    
            $acts->nis = $request->input('nis');
            $acts->id_act = $request->input('id_act');
            $acts->date = $request->input('date');
            $acts->reason = $request->input('reason');
    
            $acts -> save();
        }else{
            return redirect('/izin')->with('errors', 'NIS tidak ditemukan');
        }

        return redirect('/izin')->with('success', 'Data Berhasil Disimpan');
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
