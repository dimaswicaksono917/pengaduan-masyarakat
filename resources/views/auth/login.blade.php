@extends('layouts_fe.auth')
@section('content')
    <section>
        <div class="">
            <div class="row">
                <div class="col-6 vh-100 bg-green">
                    <div class="img-login">
                        <img src="{{ asset('assets/images/Good team-pana.svg ') }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="px-5">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    </div>

                    <div class="form px-5">
                        <div class="text-login text-start">
                            <h1>Login</h1>
                        </div>
                        <form action="{{ route('loginpost') }}" method="post">
                            @csrf
                            <div class="input mb-2">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username">
                            </div>
                            <div class="input mb-2">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>

                            <p>Tidak punya akun ? <a href="register">Register</a></p>

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
