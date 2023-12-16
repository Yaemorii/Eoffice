<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function store(Request $request, $id){
        // validate form

        $this->validate($request, [
            'tujuan'     => 'required|min:3'
        ]);

        //create post
        Tujuan::create([
            'misi_id' => $id,
            'tujuan'   => $request->tujuan
        ]);

        //redirect to index
        return redirect()->route('halaman.visimisi')->with(['success' => 'Tujuan Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $data = Tujuan::findOrFail($id);

        $data->update($request->all());
        return redirect('/visimisi')->with(['success' => 'Tujuan Berhasil Diubah!']);
    }

    public function destroy($id){
        $tujuan = Tujuan::findorfail($id);
        $tujuan->delete();
        return redirect('/visimisi')->with(['info' => 'Tujuan Berhasil Dihapus!']);
    }

}
