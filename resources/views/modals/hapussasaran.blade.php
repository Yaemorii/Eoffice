<div class="modal fade" id="hapusSasaran" tabindex="-1" role="dialog" aria-labelledby="hapusIndikatorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusTujuanModalLabel">Hapus Sasaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi pesan konfirmasi penghapusan -->
                <p>Anda yakin ingin menghapus Sasaran ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- Tombol konfirmasi penghapusan -->
                <form action="/hapus-sasaran/{{ $sasaran->id }}" method="POST" enctype="multipart/form-data">
                    @method('DELETE') <!-- Menggunakan DELETE method untuk menghapus data -->
                    @csrf
                    <button type="submit" class="btn btn-danger" id="konfirmasiHapusSasaran">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
