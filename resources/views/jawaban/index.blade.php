@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Detail Jawaban</h3>
            </div>
            @foreach ($jawabans as $jawab)
              <h4 class="ml-3 mt-3 mr-3">{{ $jawab->isi }}</h4> <br>
            @endforeach
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-success mb-3 ml-3">Back</button>
            </a>
        </div>
    </div> 
@endsection