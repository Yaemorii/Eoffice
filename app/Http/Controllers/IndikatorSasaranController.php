<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IndikatorSasaran;
use App\Models\Sasaran;
use Illuminate\Http\Request;

class IndikatorSasaranController extends Controller
{
    public function store(Request $request, $id){

        IndikatorSasaran::create([
            'sasaran_id'           => $id,
            'indikator'            => $request->indikator,
            'satuan_pengukuran'    => $request->satuan_pengukuran,
            'target_kondisi_awal'  => $request->target_kondisi_awal,
            'target_tahun_2021'    => $request->target_tahun_2021,
            'target_tahun_2022'    => $request->target_tahun_2022,
            'target_tahun_2023'    => $request->target_tahun_2023,
            'target_tahun_2024'    => $request->target_tahun_2024,
            'target_tahun_2025'    => $request->target_tahun_2025,
            'target_kondisi_akhir' => $request->target_kondisi_akhir,
            
        ]);

        //redirect to index
        $sasaran = Sasaran::find($id);
        return redirect('detailsasaran/'.$sasaran->id)->with(['success' => 'Indikator Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $i = IndikatorSasaran::findorfail($id);

        $i->update($request->all());
        return redirect()->back()->with(['success' => 'Indikator Berhasil Diganti!']);
    }

    public function destroy($id){
        $indikator = IndikatorSasaran::findorfail($id);
        $indikator->delete();
        $sasaran = Sasaran::find($indikator->sasaran_id);
        return redirect('detailsasaran/'.$sasaran->id)->with(['info' => 'Indikator Berhasil Dihapus!']);
    }
}
