@extends('layout.master')
{{-- @section('title','Data Mahasiswa') --}}
@section('menuDosen','active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Dosen</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-grou[">
                @forelse ($dosen as $val)
                    <li class="list-group-item">{{$val}}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection