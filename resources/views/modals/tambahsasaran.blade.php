<div class="modal fade" id="tambahSasaran" tabindex="-1" role="dialog" aria-labelledby="tambahSasaranModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahSasaranModalLabel">Tambah Sasaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form untuk menambah sasaran -->
                <form action="/sasaran-store/{id}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="misi">Kode</label><br>
                        <input name="kode" placeholder="Masukkan Kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <!-- Dropdown Misi -->
                        <select class="form-control" name="misi" id="misiDropdown">
                            @foreach ($misi as $m)
                                <option value="{{ $m->misi }}" data-target="{{ $m->misi }}">
                                    {{ $m->misi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <select class="form-control" name="tujuan" id="tujuanDropdown">
                            @foreach ($tujuan as $t)
                                <option value="{{ $t->tujuan }}" data-parent="{{ $t->parent }}">
                                    {{ $t->tujuan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="indikatorTujuan">Indikator Tujuan</label>
                        <select class="form-control" name="indikator_tujuan" id="indikatorTujuanDropdown">
                            @foreach ($indikator as $i)
                                <option value="{{ $i->indikator }}" data-parent="{{ $i->parent }}">
                                    {{ $i->indikator }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="namaSasaran">Nama Sasaran</label>
                        <textarea class="form-control" rows="4" placeholder="Masukkan nama sasaran" name="nama_sasaran"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="tambahSasaranBtn" type="submit" class="btn text-white">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>  