@extends('adminlte.master')

@section('content')
        <div class="card card-warning ml-3 mt-3 mr-3">
            <div class="card-header">
              <h3 class="card-title">Edit Pertanyaan</h3>
            </div>
            <form action="{{ url('/pertanyaan/'.$id)}}" class="ml-3 mt-3 mr-3" method="POST">
                {{ method_field('put') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input hidden name="id" value="{{ $id }}">
                <label for="">Judul</label> <br>
                <input class="form-control" type="text" name="judul" value="{{ $pertanyaan->judul }}"> <br>
                <label for="">Isi</label> <br>
                <input class="form-control" type="text" name="isi" value="{{ $pertanyaan->isi }}"> <br>
                <input hidden class="form-control" type="text" name="tanggal_dibuat" value="{{ $pertanyaan->tanggal_dibuat }}"> <br>
                <input hidden class="form-control" type="text" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}"> <br>
                <br>
                <button type="submit" class="btn btn-primary mb-3">Update Pertanyaan</button>
            </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
        </div> 
@endsection