@extends('layouts_fe.app')
@section('content')
<section class="small-section">
    <div class="container">
        <div class="title-text text-center">
            <h1>Buat Pengaduan</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-2 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            {{-- form --}}
                            <form method="post" action="{{route('masyarakatpostpengaduan')}}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mb-2" for="laporan">Laporan</label>
                                                <textarea class="form-control"
                                                placeholder="Tulis Laporan Disini." name="isi_laporan" rows="4"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mb-2" for="foto">Bukti Foto *</label>
                                               <input type="file" class="form-control" name="foto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn-solid">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->

        </div>
    </div>
</section>
@endsection
