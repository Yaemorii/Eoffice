<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndikatorController extends Controller
{
    public function store(Request $request, $id){

        Indikator::create([
            'indikator'            => $request->indikator,
            'satuan_pengukuran'    => $request->satuan_pengukuran,
            'target_kondisi_awal'  => $request->target_kondisi_awal,
            'target_tahun_2021'    => $request->target_tahun_2021,
            'target_tahun_2022'    => $request->target_tahun_2022,
            'target_tahun_2023'    => $request->target_tahun_2023,
            'target_tahun_2024'    => $request->target_tahun_2024,
            'target_tahun_2025'    => $request->target_tahun_2025,
            'target_kondisi_akhir' => $request->target_kondisi_akhir,
            'tujuan_id'            => $id
            
            
        ]);
         

        //redirect to index
        return redirect()->route('halaman.visimisi')->with(['success' => 'Indikator Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $item = Indikator::findOrFail($id);

        $item->update($request->all());
        return redirect('/visimisi')->with(['success' => 'Indikator Berhasil Dirubah!']);
    }

    public function destroy($id)
    {
        $indikator = Indikator::findorfail($id);
        $indikator->delete();
        return redirect('/visimisi')->with(['info' => 'Indikator Berhasil Dihapus!']);
    }

    public function getIndikator($tujuanId)
{
    // Ambil data indikator berdasarkan tujuanId dari database
    $indikatorData = Indikator::where('tujuan_id', $tujuanId)->get();

    // Ubah format data menjadi array yang sesuai dengan kebutuhan dropdown
    $indikator = $indikatorData->map(function ($data) {
        return [
            'id' => $data->id,
            'indikator' => $data->indikator // Sesuaikan dengan nama kolom yang tepat
        ];
    });

    return response()->json(['indikator' => $indikator]);
}
}
