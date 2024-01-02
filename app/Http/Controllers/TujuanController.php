<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function getTujuan($misiId)
    {
        // Ambil data tujuan berdasarkan misiId dari database
        $tujuanData = Tujuan::where('misi_id', $misiId)->get();
    
        // Ubah format data menjadi array yang sesuai dengan kebutuhan dropdown
        $tujuan = $tujuanData->map(function ($data) {
            return [
                'id' => $data->id,
                'tujuan' => $data->tujuan // Sesuaikan dengan nama kolom yang tepat
            ];
        });
    
        return response()->json(['tujuan' => $tujuan]);
    }

}
