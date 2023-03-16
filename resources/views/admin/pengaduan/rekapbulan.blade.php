@extends('_layouts.admin')
@section('page_title', 'Rekap Perbulan')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Pengaduan Per Bulan</h5>
                </div>
          <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan January</b>
                    </div>
                    <div class="card-body">{{$total_pengaduan_january}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Ditanggapi January</b>
                    </div>
                    <div class="card-body">{{$tanggap_january}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Belum Ditanggapi January</b>
                    </div>
                    <div class="card-body">{{$belum_tanggap_january}}</div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan February</b>
                    </div>
                    <div class="card-body">{{$total_pengaduan_february}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Ditanggapi February</b>
                    </div>
                    <div class="card-body">{{$tanggap_february}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Belum Ditanggapi February</b>
                    </div>
                    <div class="card-body">{{$belum_tanggap_february}}</div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Maret</b>
                    </div>
                    <div class="card-body">{{$total_pengaduan_maret}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Ditanggapi Maret</b>
                    </div>
                    <div class="card-body">{{$tanggap_maret}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Belum Ditanggapi Maret</b>
                    </div>
                    <div class="card-body">{{$belum_tanggap_maret}}</div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan April</b>
                    </div>
                    <div class="card-body">1</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Ditanggapi April</b>
                    </div>
                    <div class="card-body">0</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <b>Total Pengaduan Belum Ditanggapi April</b>
                    </div>
                    <div class="card-body">1</div>
                </div>
            </div>
          </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
