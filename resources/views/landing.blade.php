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
                        <h4>Petugas Memberikan Tanggapan</h4>
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
    {{-- accordion --}}
        <section class="half-section">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="title-text text-start">
                            <h1>Yang Mereka Tanyakan</h1>
                        </div>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                 <h3> Apakah Pengaduan Ini Terbuka Untuk Umum ?</h3>
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                   <h4> Ya ! Pengaduan ini terbuka untuk masyarakat umum yang ingin melapor tentang keluhan di Desa Bitung.</h4>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  <h3>Apakah Pengaduan Yang Kita Laporkan Akan Langsung Di Tangani ?</h3>
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                   <h4> Tentu ! Laporan yang masyarakat keluhkan akan secepatnya kami tangani untuk membuat Desa Bitung menjadi lebih baik.</h4>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                 <h3>
                                     Apakah Website Ini Aman ?
                                 </h3>
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <h4>
                                      Website ini dikelola oleh tim yang handal, dan kami menjamin bahwa semua semua data yang tersimpan akan aman.
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="img-accordion d-flex justify-content-center">
                            <img src="{{asset('assets/images/Questions-pana.svg')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- end accordion --}}
@endsection
