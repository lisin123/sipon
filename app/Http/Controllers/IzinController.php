<?php

namespace App\Http\Controllers;

use App\Models\IjinKegiatan;
use App\Models\Santri;
use Illuminate\Http\Request;
use App\Models\IjinPulangCuti;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Carbon;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $santri = Santri::all();
        $kegiatans = IjinKegiatan::with('Santri', 'Kegiatan')->get();
        $pulangs = IjinPulangCuti::with('Santri')->get()->where('type', 'P')->where('is_come', 'False');
        $cutis = IjinPulangCuti::with('Santri')->get()->where('type', 'C')->where('is_come', 'False');
        
        return view('contents.izin')->with(compact('kegiatans', 'pulangs', 'cutis','santri'));
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
        
        return redirect('/izin')->with('success', 'Data Berhasil Disimpan');
    }

    public function store2(Request $request)
    {

        $this->validate($request,[
            'nis' => 'required',
            'type' => 'required',
            'daterange' => 'required',
            'reason' => 'required',
        ]);

        $acts = new IjinPulangCuti;

        $acts->nis = $request->input('nis');
        $acts->type = $request->input('type');
        $acts->start_date = explode(' - ',$request->input('daterange'))[0];
        $acts->finish_date = explode(' - ',$request->input('daterange'))[1];
        $acts->reason = $request->input('reason');
        $acts->is_come = 'False';

        $acts -> save();
        
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
    public function update(Request $request)
    {
        $konfirmasi=IjinPulangCuti::where('id',$request->id)->first();

        $data['is_come']='True';
        // $time1 = new DateTime(date("Y-m-d"));
        // $time2 = new DateTime($konfirmasi->finish_date);
        
        // $interval = $time1->diff($time2)->format("%r%a");
        // echo "$interval hari";
        // echo $data['late']=Carbon::now()->diffInDays($konfirmasi->finish_date);
        if(Carbon::now()>$konfirmasi->finish_date){

            $data['late']=Carbon::now()->diff($konfirmasi->finish_date)->d;
        }else{
            $data['late']=0;
        }
        // dd($data);
        IjinPulangCuti::where('id',$request->id)->update($data);
        return redirect('/datang')->with('success', 'Data Berhasil Dikonfirmasi');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if($request->tabel=='kegiatan'){
            IjinKegiatan::where('id',$request->id)->delete();
        }else{
            IjinPulangCuti::where('id',$request->id)->delete();
        }
        return redirect('/izin')->with('success', 'Data Berhasil Dihapus');
    }
}
