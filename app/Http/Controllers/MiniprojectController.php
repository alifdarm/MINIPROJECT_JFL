<?php

namespace App\Http\Controllers;

use App\Annotate;
use Illuminate\Http\Request;
use App\Instansi;
use App\Miniproject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Profile;
use RealRashid\SweetAlert\Facades\Alert;

class MiniprojectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['miniproject/details/']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ind = Auth::user();
        $list = Instansi::all();
        $list2 = DB::table('antrian')->where('user_id',Auth::user()->id)->get();
        $acc = DB::select('select * from annotate where user_id = ? and annotate = ?', [Auth::user()->id,'accepted']);
        $dec = DB::select('select * from annotate where user_id = ? and annotate = ?', [Auth::user()->id,'declined']);
        $count_bank= count(DB::select('select * from antrian where instansi_id = ?', [1]));
        $count_imigrasi= count(DB::select('select * from antrian where instansi_id = ?', [2]));
        $count_sehat= count(DB::select('select * from antrian where instansi_id = ?', [3]));
        $count_police= count(DB::select('select * from antrian where instansi_id = ?', [4]));
       return view('laman_depan',['list' => $list,'list2' => $list2,'ind'=>$ind,'acc'=>$acc,'dec'=>$dec, 'count1'=>$count_bank, 'count2'=>$count_imigrasi, 'count3'=>$count_sehat, 'count4'=>$count_police]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('form_antrian');
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
        $string = $request->service;
        $id = (int)substr($string, 0,2);
        if ($string == "--Select One--"){
            Alert::error('Error', 'Pilihan Layanan Tidak Valid');
            return back();
        }

        else {

            $no_antre = "";
            if ($id == 1){
                $no_antre = $request->no_bni;
            }
            else if ($id == 2) {
                $no_antre = $request->no_imigrasi;
            }
            else if ($id == 3) {
                $no_antre = $request->no_bpjs;
            }
            else if ($id == 4) {
                $no_antre = $request->no_samsat;
            }

            $user = Auth::user();
            $services = Miniproject::create([
            'instansi_id' => $id,
            'jenis_layanan' => $request->service,
            'user_id' => $user->id,
            'no_antrian' => $no_antre
            ]);


            Alert::success('Success', 'Berhasil Mendapatkan Kode Antrian');

            return redirect('/miniproject');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 0)
    {
        //
        $ind = Auth::user();
        $id = Auth::user()->id;
        $list = Miniproject::where('user_id',$id)->get()->reverse();
        $count = count($list);

        return view('list_antrian',['list'=>$list,'ind'=>$ind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('annotate')->where('antrian_id',$id)->delete();
        DB::table('antrian')->where('id',$id)->delete();

        Alert::warning('Success!', 'Anda menghapus nomor antrean');
        return redirect('/miniproject')->with('success','Pertanyaan Dihapus!');
    }

    public function detail($id)
    {
        $antre_bni = DB::select('select * from antrian where instansi_id = ?', [1]);
        $bni_len = count($antre_bni);
        $antre_imigrasi = DB::select('select * from antrian where instansi_id = ?', [2]);
        $imigrasi_len = count($antre_imigrasi);
        $antre_bpjs = DB::select('select * from antrian where instansi_id = ?', [3]);
        $bpjs_len = count($antre_bpjs);
        $antre_samsat = DB::select('select * from antrian where instansi_id = ?', [4]);
        $samsat_len = count($antre_samsat);
         return view('form_antrian',compact('id', 'bni_len','imigrasi_len', 'bpjs_len','samsat_len'));


    }


    public function maps()
    {
        return view('partials.map');
    }
}
