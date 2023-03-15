@extends('layouts_fe.auth')
@section('content')
    <section>
        <div class="">
            <div class="row">
                <div class="col-6 vh-100 bg-green">
                    <div class="img-login">
                        <img src="{{asset('assets/images/Good team-pana.svg ')}}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-register px-5">
                        <div class="text-login text-start">
                            <h1>Register</h1>
                        </div>
                        <form action="{{route('registerpost')}}" method="post">
                            @csrf
                            <div class="input mb-2">
                                <label for="nik">NIK</label>
                                <input class="form-control" type="number" name="nik">
                            </div>
                            <div class="input mb-2">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama">
                            </div>
                            <div class="input mb-2">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username">
                            </div>
                            <div class="input mb-2">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="input mb-2">
                                <label for="telp">Telp</label>
                                <input class="form-control" type="number" name="telp">
                            </div>

                            <p>Sudah punya akun ? <a href="login">Login</a></p>

                            <button class="btn-login mt-2" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
