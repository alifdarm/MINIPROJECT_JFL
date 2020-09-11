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

class AdminController extends Controller
{
    //


   public function index()
   {
       return view('partials.login_admin');
   }

   public function detail()
   {
        $list_bank = Miniproject::where('instansi_id',1)->get()->reverse();
        $list_imigrasi = Miniproject::where('instansi_id',2)->get()->reverse();
        $list_sehat = Miniproject::where('instansi_id',3)->get()->reverse();
        $list_samsat = Miniproject::where('instansi_id',4)->get()->reverse();
        $annotate = Annotate::all();
        $names = DB::table('users')->get();

        //dd($names);
        alert()->info('For Administrator!','Disini Anda berposisi sebagai admin, yang mana Anda dapat melakukan penerimaan maupun penolakan antrean seseorang');

        return view('admin',['list_bank'=>$list_bank, 'list_imigrasi'=>$list_imigrasi, 'list_sehat'=>$list_sehat, 'list_samsat'=>$list_samsat,'names'=>$names,'annotate'=>$annotate]);
   }

   public function action(Request $request, $id,$corp)
   {

       if ($request->annotate1 == 'Accept'){

        $query = Annotate::create([
            'antrian_id' => $id,
            'instansi_id' => $corp,
            'annotate' => 'accepted'
       ]);
       }
       else{
        $query = Annotate::create([
            'antrian_id' => $id,
            'instansi_id' => $corp,
            'annotate' => 'declined'
        ]);
       }

       toast('Your Post as been submited!','success');


       return redirect('admin/miniproject');
   }

   public function reset($id)
   {
        DB::table('annotate')->where('instansi_id',$id)->delete();
        DB::table('antrian')->where('instansi_id',$id)->delete();
        Alert::warning('Success!', 'Anda menghapus Sebuah Antrean Satu Instansi');
        return redirect('/admin/miniproject');
   }

   public function reset_master()
   {

        $query2 = DB::table('annotate')->delete();
        $query1 = DB::table('antrian')->delete();
        Alert::warning('Success!', 'Anda menghapus SEMUA nomor antrean');
        return redirect('/admin/miniproject')->with('success','Pertanyaan Dihapus!');
   }
}
