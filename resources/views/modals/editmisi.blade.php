<div class="modal fade" id="editMisi{{ $m->id }}" tabindex="-1" role="dialog" aria-labelledby="editMisiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMisiModalLabel">Edit Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form untuk mengubah misi -->
                <form action="{{url('misi/update')}}/{{ $m->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="newMisi">Misi Baru</label>
                        <input type="text" class="form-control" name="misi" placeholder="Masukkan misi baru" value="{{ $m->misi }}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="ubahMisiBtn" type="submit" class="btn text-white">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
