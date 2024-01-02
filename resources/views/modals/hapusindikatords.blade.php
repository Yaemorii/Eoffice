<div class="modal fade" id="hapusIndikator{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusIndikatorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusTujuanModalLabel">Hapus Indikator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi pesan konfirmasi penghapusan -->
                <p>Anda yakin ingin menghapus Indikator ini?</p>
            </div>
            <!-- Tombol konfirmasi penghapusan -->
            <form action="/hapus-indikatorsasaran/{{ $i->id }}" method="POST" enctype="multipart/form-data">
                @method('DELETE') <!-- Menggunakan DELETE method untuk menghapus data -->
                @csrf
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" id="konfirmasiHapusTujuan">Hapus</button>
            </form>
        </div>
    </div>
</div>
</div>
