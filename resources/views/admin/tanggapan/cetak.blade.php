
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petugas PEMAS</title>
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css') }}" /> --}}
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.png') }}" type="image/png" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/extensions/datatables.net-bs5/css/datatables.responsive.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/extensions/toastify-js/src/toastify.css') }}" />
    <style>

    </style>
    @yield('css')
</head>

<body>
    <script src="{{ asset('admin/assets/js/initTheme.js') }}"></script>
    <div id="app">
        {{-- kop surat --}}
        <section class="half-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <div class="logo-kopsurat">
                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="text-kopsurat text-center">
                            <h3>Pemerintah Kabupaten Bogor</h3>
                            <h3>Kecamatan Ciawi</h3>
                            <h3 class="mb-2">Desa Bitung</h3>
                            <h4>Alamat: JL. Sukamanah, RT 02, RW 01, No: 30 Kode Pos : 16720 </h4>
                            <h4>Email: desabitung@gmail.com, Telp: (+62) 123 123 123</h4>
                        </div>
                       <hr>
                    </div>
                </div>
            </div>
        </section>
        {{-- end kopsurat --}}
        <section class="half">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="text-header-surat">
                            <h4>Perihal : <strong>Pengaduan Masyarakat</strong></h4>
                            <h4>Pelapor : {{ $data->masyarakat->nama }}</h4>
                            <h4>NIK : {{ $data->masyarakat->nik }}</h4>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-header-surat text-end">
                            <h4>Tanggal Pengaduan : {{ date('d F Y', strtotime($data->tgl_pengaduan)) }}</h4>
                            <h4>Tanggal Ditanggapi : {{ date('d F Y', strtotime($tanggapan->tgl_tanggapan)) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- tanggapan --}}
        <section class="small-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="detail-laporan">
                            <div class="text-header-surat">
                                <h4>Laporan : {{ $data->isi_laporan }}</h4>
                            </div>
                            <div class="text-header-surat">
                                <h4>Bukti Foto :</h4><img width="250" src="{{ asset('img/pengaduan/' . $data->foto) }}">
                            </div>
                        </div>

                        <div class="detail-laporan ">
                            <div class="text-header-surat">
                                <h4>Tanggapan : {{ $tanggapan->tanggapan }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="half-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <div class="text-header-surat">
                            <h4>Ditanggapi Oleh : {{ $tanggapan->petugas->nama_petugas }}</h4>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="text-header-surat text-center">
                            <h4>Kepala Desa</h4><br><br><br>
                            <h4>Dedeh Sarbini</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

      {{-- <div class="card">
                <div class="card-header">
                    <h4>Tanggapan Pengaduan</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center text-center mb-3">
                            <img width="150" src="{{ asset('img/pengaduan/' . $data->foto) }}">
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group d-flex flex-column">
                                        <label for="isi">Isi Laporan :</label>
                                        <span><b>{{ $data->isi_laporan }}</b></span>
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="tgl_[]">Dibuat Pada :</label>
                                        <span id="tgl_p" ><b>{{ date('d F Y', strtotime($data->tgl_pengaduan)) }}</b></span>
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="author">Author :</label>
                                        <span id="author"><b>{{ $data->masyarakat->nama }}</b></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group d-flex flex-column">
                                        <label for="tgp">Tanggapan :</label>
                                        <span id="tgp"><b>{{ $tanggapan->tanggapan }}</b></span>
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="tgp_a">Ditanggapi Pada :</label>
                                        <span id="tgp_a"><b>{{ date('d F Y', strtotime($tanggapan->tgl_tanggapan)) }}</b></span>
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="tgl_t">Ditanggapi Oleh :</label>
                                        <span id="tgl_t"><b>{{ $tanggapan->petugas->nama_petugas }}</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

    <script>
        window.print();
    </script>

    @include('_partials_admin.js')
    <script src="{{ asset('admin/assets/js/extensions/printpage.js') }}"></script>
</body>

</html>

