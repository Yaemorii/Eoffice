<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/Banjarbaru.png" type="image/x-icon">
    <title>EOffice Kota Banjarbaru</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel= "stylesheet" href="visimisi.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.navbar')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered w-100" style="background-color: white;">
                                    @foreach ($visis as $v)
                                        <tr>
                                            <td>
                                                <b>
                                                    VISI
                                                    <button id="editVisiBtn"
                                                        class="d-none d-sm-inline-block btn btn-sm shadow-sm rounded-pill float-right text-white"
                                                        data-toggle="modal" data-target="#editVisiModal">
                                                        Edit Visi
                                                    </button>
                                                </b>
                                                @include('modals.editvisi')
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $v->visi }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--TABEL MISI-->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered w-100" style="background-color: white; border: none;">
                            <tr>
                                <td>
                                    <b>
                                        MISI
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="panel-body table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="border:none; border-bottom: 2px solid #ddd;">
                                                        #
                                                    </th>
                                                    <th style="border:none; border-bottom: 2px solid #ddd;">
                                                        Nama Misi
                                                    </th>
                                                    <th style="border:none; border-bottom: 2px solid #ddd;">
                                                        Opsi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($misi as $m)
                                                    <tr>
                                                        <td style="border: none;">
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td style="border: none;">
                                                            {{ $m->misi }}
                                                        </td>
                                                        <td style="border: none;">
                                                            <a data-tip="editMisi"
                                                                href="{{ url('misi/edit') }}/{{ $m->id }}"
                                                                class="text-warning" 
                                                                data-toggle="modal"
                                                                data-target="#editMisi{{ $m->id }}">
                                                                <i class="fa-solid fa-pencil" style="border: 1px solid #ffc107; outline:none; border-radius: 50%; padding: 7px; font-size: 11px">
                                                                </i>
                                                            </a>

                                                            @include('modals.editmisi')
                                                            <a href="/hapus/misi/{{ $m->id }}"
                                                                class="text-danger btn-delete rounded-circle">
                                                                <i class="fa-solid fa-trash-can" style="border: 1px solid #ff0000; outline:none; border-radius: 50%; padding: 7px; font-size: 11px">
                                                                </i>
                                                            </a>
                                                        </td>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="text-left">
                        <button id="tambahMisiBtn" class="btn" style="margin-top: 5px;"
                            data-toggle="modal" data-target="#tambahMisiModal">
                            <i class="fas fa-plus">
                            </i>
                            Tambah Misi
                        </button>
                        @include('modals.tambahmisi')
                    </div>
                    </td>
                    </tr>
                    </table>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-14">
                        <table class="table table-bordered w-100" style="background-color: white;">
                            <tr>
                                <td>
                                    <b>
                                        TUJUAN
                                    </b>
                                </td>
                            </tr>
                            @foreach ($misi as $m)
                                <tr>
                                    <td>
                                        <p>
                                            <b>
                                                Misi {{ $loop->iteration }}.
                                            </b>
                                            {{ $m->misi }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <button id="tambahTujuanBtn" class="btn" style="margin-top: 5px;"
                                                data-toggle="modal"
                                                data-target="#tambahTujuanModal{{ $m->id }}">
                                                <i class="fas fa-plus">
                                                </i>
                                                Tambah Tujuan Misi {{ $loop->iteration }}
                                            </button>
                                            @include('modals.tambahtujuan')
                                        </div>
                                    </td>
                                </tr>
                    </div>
                </div>
            </div>


            @foreach ($m->tujuan as $t)
                <tr>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog">
                                </i>
                                <!-- Ikon setelan (setting) -->
                            </button>
                            <p class="ml-2">
                                <b>
                                    Tujuan {{ $loop->iteration }}.
                                </b>
                                {{ $t->tujuan }}
                            </p>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" data-tip="editTujuan" data-toggle="modal"
                                    data-target="#editTujuan{{ $t->id }}">
                                    Edit
                                </a>
                                <a class="dropdown-item" data-tip="hapusTujuan" data-toggle="modal"
                                    data-target="#hapusTujuan{{ $t->id }}">
                                    Hapus
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Modal Edit Tujuan -->
                <div class="modal fade" id="editTujuan{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="editTujuanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editTujuanModalLabel">Edit Tujuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/tujuan-update/{{ $t->id }}'" method="POST" enctype="multipart/form-data">
                                    @method('PUT') 
                                    @csrf
                                    <div class="form-group">
                                        <label for="misi">Misi</label>
                                        <p>{{ $m->misi }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="newTujuan">Tujuan</label>
                                        <input type="text" class="form-control" name="tujuan" placeholder="Masukkan tujuan baru" value="{{ $t->tujuan }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button id="ubahTujuanBtn" type="submit" class="btn text-white">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Hapus Tujuan -->
                <div class="modal fade" id="hapusTujuan{{ $t->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="hapusTujuanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusTujuanModalLabel">Hapus Tujuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi pesan konfirmasi penghapusan -->
                                <p>Anda yakin ingin menghapus tujuan ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <!-- Tombol konfirmasi penghapusan -->

                                <form action="/hapus-tujuan/{{ $t->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('DELETE')
                                    <!-- Menggunakan DELETE method untuk menghapus data -->
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        id="konfirmasiHapusTujuan">Hapus</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                </td>
                </tr>
                <tr>
                    <td>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>
                                            No.
                                        </th>
                                        <th>
                                            Indikator
                                        </th>
                                        <th class="col-1">
                                            Kondisi Awal
                                        </th>
                                        <th class="col-1">
                                            Target 2021
                                        </th>
                                        <th class="col-1">
                                            Target 2022
                                        </th>
                                        <th class="col-1">
                                            Target 2023
                                        </th>
                                        <th class="col-1">
                                            Target 2024
                                        </th>
                                        <th class="col-1">
                                            Target 2025
                                        </th>
                                        <th class="col-1">
                                            Kondisi Akhir
                                        </th>
                                        <th class="col-1">
                                            Satuan
                                        </th>
                                        <th class="col-1">
                                            Opsi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($t->indikator as $i)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $i->indikator }}
                                            </td>
                                            <td>
                                                {{ $i->target_kondisi_awal }}
                                            </td>
                                            <td>
                                                {{ $i->target_tahun_2021 }}
                                            </td>
                                            <td>
                                                {{ $i->target_tahun_2022 }}
                                            </td>
                                            <td>
                                                {{ $i->target_tahun_2023 }}
                                            </td>
                                            <td>
                                                {{ $i->target_tahun_2024 }}
                                            </td>
                                            <td>
                                                {{ $i->target_tahun_2025 }}
                                            </td>
                                            <td>
                                                {{ $i->target_kondisi_akhir }}
                                            </td>
                                            <td>
                                                {{ $i->satuan_pengukuran }}
                                            </td>
                                            <td>
                                                <a data-tip="editIndikator"
                                                     class="text-warning"
                                                    data-toggle="modal" data-target="#editIndikatorModal{{ $i->id }}">
                                                    <i class="fa-solid fa-pencil" style="border: 1px solid #ffc107; outline:none; border-radius: 50%; padding: 7px; font-size: 11px">
                                                    </i>
                                                </a>
                                                @include('modals.editindikator')
                                                <a href="/hapus/indikator/{{ $i->id }}" data-tip="delete"
                                                    class="text-danger">
                                                    <i class="fa-solid fa-trash-can" style="border: 1px solid #ff0000; outline:none; border-radius: 50%; padding: 7px; font-size: 11px">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
            @endforeach
            </table>
        </div>
        <div class="text-right">
            <button id="tambahIndikatorBtn" class="btn" style="margin-top: 10px;" data-toggle="modal"
                data-target="#tambahIndikatorModal{{ $t->id }}">
                <i class="fas fa-plus">
                </i>
                Tambah Indikator
            </button>
        </div>
        @include('modals.tambahindikator')
        @endforeach
        </form>
        @endforeach
        </td>
        </tr>

        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->
    </div>

    </div>
    </div>
    </div>
</body>

</html>
