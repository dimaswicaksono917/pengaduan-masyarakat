@extends('layouts_fe.app')
@section('content')
    {{-- landing --}}
    <section class="half-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="text-landing">
                        <h1>Selamat Datang Di Forum <span>Pengaduan</span> Desa Bitung</h1>
                        <p>Pentung (Pengaduan Bitung) Adalah aplikasi pelaporan berbasis web
                            yang akan memudahkan warga desa Bitung untuk mengadukan keluhan agar
                            desa Bitung Sari agar menjadi lebih baik.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="image-landing">
                        <img src="{{ asset('assets/images/Data report-amico.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end landing --}}
    {{-- step --}}
    <section class="half-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-text text-center">
                        <h1>Tahap Pengaduan</h1>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="icon-tahap rounded-circle fa-solid fa-pen"></i>
                        <h4>Menulis Laporan</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="icon-tahap rounded-circle fa-solid fa-check"></i>
                        <h4>Petugas Melakukan Validasi</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="icon-tahap rounded-circle fa-solid fa-reply"></i>
                        <h4>Petugas Mmberikan Tanggapan</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end step --}}
    {{-- total --}}
        {{-- total --}}
        <section class="half-section overlay-green">
            <div class="container">
                <div class="total-pengaduan text-center">
                    <h1>Total Pengaduan</h1>
                    <h1>{{$total_pengaduan}}</h1>
                </div>
            </div>
        </section>
        {{-- end total --}}
            {{-- keunggulan --}}
    <section class="half-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-text text-center">
                        <h1>Keunggulan</h1>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="icon-tahap rounded-circle fa-solid fa-comment"></i>
                        <h4>Respon Cepat</h4>
                        <p>Petugas yang siap standby didepan layar akan merespon laporan kamu</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="rounded-circle icon-tahap  fa-solid fa-user-shield"></i>
                        <h3>Aman</h3>
                        <p>Kami tidak akan membocorkan tentang pengaduanmu selain kepada pihak yang berwenang</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tahap text-center">
                        <i class="rounded-circle icon-tahap fa- fa-solid fa-clock"></i>
                        <h4>Layanan 12 Jam</h4>
                        <p>Kamu akan dilayani oleh petugas desa mulai jam 7 pagi sampai 7 malam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end keunggulan --}}
@endsection
