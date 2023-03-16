@extends('layouts_fe.app')
@section('content')
    <section class="half-section">

        <div class="col-12">
            <div class="px-5">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
            </div>
        </div>

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
                    @foreach ( $data as $datas )
                    <div class="card mt-4">
                        <div class="card-bodys">
                            <div class="text-pengaduan">
                                <div class="row">
                                    <div class="col-6">
                                        <h3><strong>NIK :</strong> {{ $datas->nik }}</h3>
                                        <h3><strong>Tanggal :</strong> {{ $datas->tgl_pengaduan }}</h3>
                                        <h3><strong>Laporan :</strong> {{ $datas->isi_laporan }}</h3>
                                        <div class="row">
                                            <div class="col-3">
                                                <form action="{{route('masyarakatdestroypengaduan',$datas->no_pengaduan)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn-delete">Hapus</button>
                                                </form>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('masyarakattanggapanDetail',$datas->no_pengaduan)}}">
                                                    {{-- @if  ($data->status == 'selesai') --}}
                                                    <button class="btn-tanggapan">Tanggapan</button>
                                                    {{-- @endif --}}
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <h3><strong>Status :</strong> {{ $datas->status }}</h3>
                                        <h3 class="mb-5"><strong>Foto Bukti :</strong> <br>
                                            <img width="150" src="{{ asset('img/pengaduan/' . $datas->foto) }}">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


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
