@extends('layouts_fe.app')
@section('content')
    <section class="half-section">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    {{-- card --}}
                    <div class="baner-pengaduan">
                        <div class="row">
                            <div class="col-8">
                                <div class="baner-text text-center">
                                    <h2>Data Pengaduan</h2>
                                </div>
                            </div>
                            <div class="col-2">
                                <img src="{{ asset('assets/images/Anxiety-pana.svg') }}" alt="">
                            </div>
                        </div>

                    </div>
                    {{-- end card --}}
                    {{-- data pengaduan --}}


                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="text-pengaduan">
                                <h3><strong>NIK :</strong> {{ $data->nik }}</h3>
                                <h3><strong>Tanggal :</strong> {{ $data->tgl_pengaduan }}</h3>
                                <h3><strong>Laporan :</strong> {{ $data->isi_laporan }}</h3>
                                <h3><strong>Status :</strong> {{ $data->status }}</h3>
                                <h3 class="mb-5"><strong>Foto Bukti :</strong> <br>
                                    <img width="150" src="{{ asset('img/pengaduan/' . $data->foto) }}">
                                </h3>
                            </div>
                        </div>
                    </div>


                    {{-- end data pengaduan --}}
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="user-card text-center">
                        <div class="card">
                            <div class="card-header">
                                <h3>{{ $me->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <h4>Total Pengaduanku</h4>
                                <h4>{{ $total }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
