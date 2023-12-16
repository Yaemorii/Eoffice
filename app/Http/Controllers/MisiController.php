<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index($id)
    {
        //get visis
        $misi = Misi::find($id);
        return view('visimisi', ['misi' => $misi]);
        
    }


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('halaman.visimisi');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // validate form
        $this->validate($request, [
            'misi' => 'required|min:5',
        ]);

        //create post
        Misi::create([
            'misi' => $request->misi,
        ]);

        //redirect to index
        return redirect('visimisi')->with(['success' => 'Misi Berhasil Disimpan!']);
            
    }

    public function edit($id){
        $misi = Misi::find($id); // Menggunakan find() untuk menemukan ID
        return view('/visimisi')->with('misi', $misi);
    }
    
    public function update(Request $request, $id)
    {
        $misi = Misi::findorFail($id);
        $misi->misi = $request->misi;
        
        $misi->save();
        return redirect('/visimisi')->with(['success' => 'Misi Berhasil Diubah!']);
    }
    
    

    public function destroy($id)
    {
        $misi = Misi::findorfail($id);
        $misi->delete();
        return redirect('/visimisi')->with(['info' => 'Misi Berhasil Dihapus!']);
    }
}
