 <div class="modal fade" id="editIndikatorModal{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="editIndikatorModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="editIndikatorModalLabel">Ubah
                     Indikator</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="/indikator-update/{{ $i->id }}" method="POST">
                     @method('PUT')
                     @csrf
                     <div class="form-group">
                         <label for="misiTujuan">Misi</label>
                         <p>{{ $m->misi }}
                     </div>
                     <div class="form-group">
                         <label for="misiTujuan">Tujuan</label>
                         <p>{{ $t->tujuan }}</p>
                     </div>

                     <div class="form-group">
                         <label for="indikator">Indikator:</label>
                         <textarea class="form-control" name="indikator" rows="4" placeholder="Masukkan Indikator di sini">{{ $i->indikator }}</textarea>
                     </div>

                     <div class="form-group">
                         <label for="satuanPengukuran">Satuan Pengukuran:</label>
                         <select class="form-control" name="satuan_pengukuran">
                            <option selected="selected" disabled="true">Pilih Satuan Pengukuran</option>
                            <option value="Lokasi">Lokasi</option>
                            <option value="Indeks">Indeks</option>
                            <option value="Kegiatan">Kegiatan</option>
                            <option value="Titik">Titik</option>
                            <option value="Sasaran">Sasaran</option>
                            <option value="SR">SR</option>
                            <option value="Kali">Kali</option>
                            <option value="Minggu sekali dalam setahun">Minggu sekali dalam setahun</option>
                            <option value="Forum/Kampung">Forum/Kampung</option>
                            <option value="Kelompok">Kelompok</option>
                            <option value="Orang">Orang</option>
                            <option value="KK">KK</option>
                            <option value="Hektar">Hektar</option>
                            <option value="Unit">Unit</option>
                            <option value="Ha">Ha</option>
                            <option value="m3/detik">m3/detik</option>
                            <option value="KM">KM</option>
                            <option value="Kecamatan">Kecamatan</option>
                            <option value="Route">Route</option>
                            <option value="Paket">Paket</option>
                            <option value="Organisasi">Organisasi</option>
                            <option value="Sekolah/Pesantren">Sekolah/Pesantren</option>
                            <option value="Sekolah">Sekolah</option>
                            <option value="Siswa/guru">Siswa/guru</option>
                            <option value="Siswa">Siswa</option>
                            <option value="Peserta">Peserta</option>
                            <option value="Penyuluh">Penyuluh</option>
                            <option value="Tokoh">Tokoh</option>
                            <option value="Responden">Responden</option>
                            <option value="Tahun">Tahun</option>
                            <option value="Bulan">Bulan</option>
                            <option value="Minggu">Minggu</option>
                            <option value="Hari">Hari</option>
                            <option value="%">%</option>
                            <option value="Kategori">Kategori</option>
                            <option value="Nilai">Nilai</option>
                            <option value="Opini">Opini</option>
                            <option value="Angka">Angka</option>
                             <!-- Tambahkan pilihan satuan pengukuran lainnya di sini -->
                         </select>
                     </div>
                     <div class="container">
                         <div class="row">
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Kondisi Awal</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target Kondisi Awal"
                                                     name="target_kondisi_awal" value="{{ $i->target_kondisi_awal }}">
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Tahun 2021</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target 2021" name="target_tahun_2021" value="{{ $i->target_tahun_2021 }}"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Tahun 2022</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target 2022" name="target_tahun_2022" value="{{ $i->target_tahun_2022 }}"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Tahun 2023</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target 2023" name="target_tahun_2023" value="{{ $i->target_tahun_2023 }}"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Tahun 2024</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target 2024" name="target_tahun_2024" value="{{ $i->target_tahun_2024 }}"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target 2025</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target 2025" name="target_tahun_2025" value="{{ $i->target_tahun_2025 }}"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="col-md-6">
                                 <table class="table table-lg table-bordered">
                                     <thead class="bg-secondary text-black">
                                         <tr class="bg-light">
                                             <th>Target Kondisi Akhir</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><input type="text" class="form-control"
                                                     placeholder="Masukkan Target Akhir" name="target_kondisi_akhir" value="{{ $i->target_kondisi_akhir}}">
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
