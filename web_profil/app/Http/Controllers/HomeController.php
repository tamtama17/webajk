<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\inventaris;
use App\daftaradmin;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = inventaris::all();
        //dd($var);        
        return view('inventaris',compact('var'));
    }

    public function admin()
    {
        $var = daftaradmin::all();
        //dd($var);        
        return view('admin',compact('var'));
    }

    public function input_barang(Request $request)
    {
        //dd($request);

        $user = new inventaris;
        $user->jenis_barang = $request->input('jenis_barang');
        $user->merek_barang = $request->input('merek_barang');
        $user->jumlah_barang = $request->input('jumlah_barang');
        $user->save();
       // return inventaris::create([
       //      'jenis_barang' => $request['jenis_barang'],
       //      'merek_barang' => $request['merek_barang'],
       //      'jumlah_barang' => $request['jumlah_barang'],
       //  ]);        
        return redirect()->back()->with(['success' => 'Data Berhasil Masuk']);
    }

    public function deled($id){
     //echo $id;
        inventaris::find($id)->delete();
        return redirect()->back()->with(['warning' => 'Data Berhasil Dihapus']);
    }

    public function update_barang(Request $request, $id){

        $update = array(
            'jenis_barang' => $request->input('jenis_barang'),
            'merek_barang' => $request->input('merek_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        );

        //dd($update);
        $hehe = inventaris::find($id);
        //dd($hehe);
        inventaris::find($id)->update($update);
        return redirect()->back()->with(['info' => 'Data Berhasil DiUpdate']);   
    }

    public function update_admin(Request $request, $id){

        if ($request->file('foto_admin')) {
            $berkas = $request->file('foto_admin');
            $namafile = time().'_'.$id.'.'.$berkas->getClientOriginalExtension();
            $path = public_path('foto_profil');
            $berkas->move($path, $namafile);

            $query = DB::table('daftaradmin')->where('id', $id)->first();
            if ($query->foto_admin != NULL) {
                File::delete(public_path('/foto_profil/'.$query->foto_admin));
            }

            $gantifoto = array(
                'foto_admin' => $namafile
            );
            daftaradmin::find($id)->update($gantifoto);
        }

        $update = array(
            'nama_admin' => $request->input('nama_admin'),
            'NRP' => $request->input('NRP'),
            'jabatan_admin' => $request->input('jabatan_admin'),
        );

        daftaradmin::find($id)->update($update);
        return redirect()->back()->with(['info' => 'Data Berhasil DiUpdate']);   
    }

}