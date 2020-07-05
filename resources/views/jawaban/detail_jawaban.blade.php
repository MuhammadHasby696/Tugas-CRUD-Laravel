@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail Jawaban</h3>
            </div>
            <form action="" class="ml-3 mt-3 mr-3">
            <h4>Pertanyaan</h4> <br>
              <label for="">Judul</label> <br>
              <p> {{ $pertanyaan->judul }} </p> <br>
              <label for="">Isi</label> <br>
              <p> {{ $pertanyaan->isi }} </p> <br>
              <label for="">Tanggal Dibuat</label> <br>
              <p> {{ $pertanyaan->tanggal_dibuat }} </p> <br>
              <label for="">Tanggal Diperbaharui</label> <br>
              <p> {{ $pertanyaan->tanggal_diperbaharui }} </p> <br>
            
              <h4>Jawaban</h4> <br>
              @foreach ($jawabans as $jawab)
                <p> {{ $jawab->isi }}, {{ $jawab->tanggal_dibuat }}, {{ $jawab->tanggal_diperbaharui }} </p> <br>
              @endforeach
            </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
        </div>
    </div> 
@endsection