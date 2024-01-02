<div class="modal fade" id="tambahTujuanModal{{ $m->id }}" tabindex="1" role="dialog"
    aria-labelledby="tambahTujuanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahTujuanModalLabel">Tambah Tujuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/tujuan-store/{{ $m->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <p>{{ $m->misi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="Tujuan">Tujuan</label>
                        <textarea class="form-control" id="misiTujuan" rows="4" placeholder="Masukkan Tujuan" name="tujuan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="tujuanMisiBtn" type="submit" class="btn text-white">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
