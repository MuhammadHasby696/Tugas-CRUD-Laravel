@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <form role="form" action="/pertanyaan" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul">
              <label for="">Pertanyaan Baru</label>
              <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
              <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
              <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Create</button> <br>
            </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
          </div>
    </div>

@endsection