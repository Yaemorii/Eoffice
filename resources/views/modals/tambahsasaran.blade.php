<div class="modal fade" id="tambahSasaran" tabindex="-1" role="dialog" aria-labelledby="tambahSasaranModalLabel"
    aria-hidden="true">
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
                                <option value="{{ $m->id }}">{{ $m->misi }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <select class="form-control" name="tujuan" id="tujuanDropdown" disabled>
                            <option value="" selected disabled>Pilih Misi terlebih dahulu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="indikatorTujuan">Indikator Tujuan</label>
                        <select class="form-control" name="indikator_tujuan" id="indikatorTujuanDropdown" disabled>
                            <option value="" selected disabled>Pilih Tujuan terlebih dahulu</option>
                        </select>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#misiDropdown').change(function() {
                                var misiId = $(this).val();
                                if (misiId) {
                                    $.ajax({
                                        url: '/getTujuan/' + misiId,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            $('#tujuanDropdown').empty().append(
                                                '<option value="" selected disabled>Pilih Tujuan</option>'
                                            );
                                            $.each(data.tujuan, function(index, value) {
                                                $('#tujuanDropdown').append('<option value="' + value
                                                    .id + '">' + value.tujuan + '</option>');
                                            });
                                            $('#tujuanDropdown').prop('disabled', false);
                                        }
                                    });
                                } else {
                                    $('#tujuanDropdown').empty().prop('disabled', true);
                                    $('#indikatorTujuanDropdown').empty().prop('disabled', true);
                                }
                            });

                            $('#tujuanDropdown').change(function() {
                                var tujuanId = $(this).val();
                                if (tujuanId) {
                                    $.ajax({
                                        url: '/getIndikator/' + tujuanId,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            $('#indikatorTujuanDropdown').empty().append(
                                                '<option value="" selected disabled>Pilih Indikator</option>'
                                            );
                                            $.each(data.indikator, function(index, value) {
                                                $('#indikatorTujuanDropdown').append('<option value="' +
                                                    value.id + '">' + value.indikator + '</option>');
                                            });
                                            $('#indikatorTujuanDropdown').prop('disabled', false);
                                        }
                                    });
                                } else {
                                    $('#indikatorTujuanDropdown').empty().prop('disabled', true);
                                }
                            });
                        });
                    </script>
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
