<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/Banjarbaru.png" type="image/x-icon">
    <title>EOffice Kota Banjarbaru</title>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.navbarsasaran')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered w-100" style="background-color: white;">
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <button id="tambahSasaranBtn" class="btn btn-block mt-4 mb-4 text-white" data-toggle="modal" data-target="#tambahSasaran">
                                                    <i class="fa fa-plus"></i>Tambah Sasaran</button>
                                            </div>

                                            @include('modals.tambahsasaran')
                                        </td>
                                        <td>
                                            <div id="visiContent">
                                                <p><b>Nama Sasaran</b></p>
                                            </div>
                                            <div class="container justify-content-center">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="input-group mb-3">
                                                            <form action="/sasaran/search" class="input-group" method="GET">
                                                                <input type="search" name="search" class="form-control" placeholder="Cari berdasarkan Nama Sasaran" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                <div class="input-group-append">
                                                                    <button id="filterBtn" class="btn ml-3"
                                                                        type="submit">
                                                                        <i class="fa-solid fa-magnifying-glass"></i></i>Search
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body p-5">
                                        <!-- Bootstrap table -->
                                        <div class="table-responsive">
                                            @if ($sasaran->count() > 0)
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Kode</th>
                                                            <th>Nama Sasaran</th>
                                                            <th>Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sasaran as $s)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $s->kode }}</td>
                                                                <td>{{ $s->nama_sasaran }}</td>
                                                                <td>
                                                                    <a href="detailsasaran/{{$s->id}}">
                                                                        <button class="btn btn-primary btn-sm">
                                                                            <i class="far fa-eye"></i> Detail
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p>Tidak ada data sasaran.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>

</body>

</html>
