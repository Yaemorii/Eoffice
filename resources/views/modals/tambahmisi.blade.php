<div class="modal fade" id="tambahMisiModal" tabindex="-1" role="dialog" aria-labelledby="tambahMisiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahMisiModalLabel">Tambah Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form untuk menambahkan misi -->
                <form action="/misi-store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="namaMisi">Nama Misi</label>
                        <input type="text" class="form-control" name="misi" placeholder="Masukkan nama misi">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button id="simpanMisiBtn" type="submit" class="btn text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
