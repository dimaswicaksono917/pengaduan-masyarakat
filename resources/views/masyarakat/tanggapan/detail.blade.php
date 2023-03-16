@extends('layouts_fe.app')
@section('content')
    <section class="small-section">
        <div class="card p-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Detail tanggapan</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center mb-3">
                                        <img src="{{ asset('img/pengaduan/' . $data->foto) }}" alt="tidak ada gambar"
                                            width="300">
                                    </div>
                                    <div class="col-4 p-5">
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Isi Laporan :</label>
                                            <span><b>{{ $data->isi_laporan }}</b></span>
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Tanggal Dibuat :</label>
                                            <span><b>{{ date('d F Y', strtotime($data->tgl_pengaduan)) }}</b></span>
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Status :</label>
                                            <span><strong>{{ ucfirst($data->status) }}</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-4 p-5">
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Tanggapan :</label>
                                            <span><b>{{ $tanggapan->tanggapan }}</b></span>
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Ditanggapi Oleh :</label>
                                            <span><b>{{ $tanggapan->petugas->nama_petugas }}</b></span>
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label for="isi">Ditanggapi Pada :</label>
                                            <span><b>{{ date('d F Y', strtotime($tanggapan->tgl_tanggapan)) }}</b></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="container">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('masyarakatpengaduanku') }}"
                                                    class="float-end btn-solid">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
