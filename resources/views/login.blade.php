@extends('master')
@section('judul', 'Halaman Login')

@section('konten')
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
            <hr>
            <h3>Otentikasi Pengguna</h3>
            <form action="{{ route('login.do') }}" method="POST">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @include('massage')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Masuk menggunakan Username yang kamu gunakan saat mendaftar.</div>
                </div>
                <div class="mb-3">
                    <label for "exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
        </div>
       
    </div>
@endsection
