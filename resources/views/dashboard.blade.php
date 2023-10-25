@extends('master')
@section('judul')

@section('konten')
    <div class="row justify-align-content-md-center">
        <h3>Dashboard: Daftar Berita</h3>
        @include('massage')

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Potongan Isi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data_berita as $berita)
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{$berita->judul}}</td>
                        <td>{{substr($berita->isi, 0, 100)}}</td>
                        <td><img src="{{ asset('img/'.$berita->gambar)}}" alt=""></td>
                        <td>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-warning">Hapus</button>
                        </td>
                    </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection