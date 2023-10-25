@extends('master')
@section('judul', 'halaman register')

@section('konten')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <hr>
            <h3>Register Pengguna</h3>
            <form action="{{route('register.do')}}" method="POST">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @include('massage')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ old('email') }}">
                    <div id="emailHelp" class="form-text">Pastikan Email yang Anda daftarkan masih aktif.</div>
                    @if($errors->has('email'))
                        {{ $errors->first('email')}}
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" value="{{ old('username') }}">
                    <div id="emailHelp" class="form-text">Username berperan penting pada saat otentikasi pengguna.</div>
                    @if($errors->has('username'))
                        {{ $errors->first('username')}}
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ old('password') }}">
                    @if($errors->has('password'))
                        {{ $errors->first('password')}}
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" value="{{ old('password_confirmation') }}">
                    @if($errors->has('password_confirmation'))
                        {{ $errors->first('password_confirmation')}}
                    @endif
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya menyetujui <a href="#" target="_blank">peraturan</a> dan <a href="#" target="_blank">hak cipta</a> yang berlaku.</label>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection