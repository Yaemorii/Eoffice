<?php

namespace App\Http\Controllers;

use App\Models\Sasaran;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Indikator;
use App\Models\Tujuan;
use App\Models\IndikatorSasaran;
use Illuminate\Http\Request;

class SasaranController extends Controller
{
    public function index()
    {
        //get visis
        $sasaran = Sasaran::all();
       
        $misi = Misi::all();
        $indikator = Indikator::all();
        $tujuan = Tujuan::all();
        return view('halaman/sasaran', compact('sasaran', 'misi', 'indikator', 'tujuan'));
    }

    public function store(Request $request,$id)
    {
        // validate form
        $this->validate($request, [
            'kode' => 'required|min:1',
            'nama_sasaran' => 'required|min:1',
        ]);

        //create post
        Sasaran::create([
            'sasaran_id' => $id,
            'kode' => $request->kode,
            'nama_sasaran' => $request->nama_sasaran,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'indikator_tujuan' => $request->indikator_tujuan,

        ]);

        //redirect to index
        return redirect()->route('halaman.sasaran')->with(['success' => 'Sasaran Berhasil Disimpan!']);
    }

    public function update(Request $request, $id)
    {
        $sasaran = Sasaran::findOrFail($id);

        $sasaran->update($request->all());
        return redirect('detailsasaran/'.$sasaran->id);
    }

    public function destroy($id)
    {
        $sasaran = Sasaran::findorfail($id);
        $sasaran->delete();
        return redirect('/sasaran')->with(['info' => 'Sasaran Berhasil Dihapus!']);
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $sasaran = Sasaran::where('nama_sasaran', 'LIKE', '%' . $request->search . '%')->get();
            $misi = Misi::all();
            $indikator = Indikator::all();
            $tujuan = Tujuan::all();
        } else {
            $sasaran = Sasaran::all();
            $misi = Misi::all();
            $indikator = Indikator::all();
            $tujuan = Tujuan::all();
        }

        return view('halaman/sasaran', compact('sasaran', 'misi', 'indikator', 'tujuan'));
    }

    public function detail($id)
    {
        $sasaran = Sasaran::find($id);
        $visi = Visi::all();
       
        $sasaran = Sasaran::with('indikatorSasarans')->find($id);
        $indikatorSasarans = $sasaran->indikatorSasarans;

        return view('halaman/detailsasaran', compact('sasaran', 'visi', 'indikatorSasarans'));
    }
}
