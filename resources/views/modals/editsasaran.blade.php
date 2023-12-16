<div class="modal fade" id="editSasaran" tabindex="-1" role="dialog" aria-labelledby="editMisiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMisiModalLabel">Edit Sasaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form untuk mengubah misi -->
                <form action="/sasaran-update/{{$sasaran->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="newMisi">Sasaran Baru</label>
                        <input type="text" class="form-control" name="nama_sasaran" placeholder="Masukkan Sasaran baru"
                            value="{{ $sasaran->nama_sasaran }}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="ubahSasaranBtn" type="submit" class="btn text-white">Simpan</button>
            </div>
        </div>
    </div>
</div>
</form>
