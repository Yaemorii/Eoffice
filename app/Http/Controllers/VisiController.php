<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\Misi;
use App\Models\Indikator;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class VisiController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        
        $visis = Visi::all()->where('id','1');
        $misi = Misi::all();
        $indikator = Indikator::all();
        $tujuan = Tujuan::all();
        return view('halaman/visimisi',compact('visis','misi','indikator','tujuan'));
       
    }

    

    
    
    /**
     * create
     *
     * @return void
     */
    
        public function show($id){
            $visis = Visi::find($id);
            return view('visimisi', ['visi' => $visis]);
        }
       

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'visi'     => 'required|min:5'
        ]);

        //create post
        Visi::create([
            'visi'   => $request->visi
        ]);

        //redirect to index
        return redirect()->route('halaman.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request){
        $data = Visi::findOrFail('1');

        $data->update($request->all());
        return redirect()->route('halaman.visimisi')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}