<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventaris;
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
        //dd($id);

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

}