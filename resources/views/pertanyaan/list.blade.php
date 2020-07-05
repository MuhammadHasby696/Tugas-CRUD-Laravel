@extends('adminlte.master')

@section('content')
<div class="card mt-3 ml-3 mr-3">
    <a href="/pertanyaan/create">
      <button class="btn btn-primary mt-3 ml-3 mr-3">Create New Question</button>
    </a>
    <br>
    <table class="table table-bordered mt-3">
      <thead>
        <th>No</th>
        <th>List Pertanyaan</th>
        <th>Edit Pertanyaan</th>
        <th>Detail Jawaban</th>
        <th>Form Jawaban</th>
        <th>Detail QnA</th>
        <th>Delete Pertanyaan</th>
      </thead>
      <tbody>
        @foreach ($pertanyaans as $pertanyaan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pertanyaan->isi }}</td>
          <td>
            <a href="{{ url('/pertanyaan/'.$pertanyaan->id.'/edit') }}">
              <button class="btn btn-warning">Edit</button>
            </a>
          </td>
          <td>
            <a href="{{ url('/jawaban/'.$pertanyaan->id) }}">
              <button class="btn btn-success">Show</button>
            </a>
          </td>
          <td>
            <form action="{{ url('/jawaban/'.$pertanyaan->id) }}" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="text" name="isi">
              <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
              <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
              <input type="hidden" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
              <button type="submit" class="btn btn-success">Submit Jawaban</button>
            </form>
          </td>
          <td>
            <a href={{ url('/pertanyaan/'.$pertanyaan->id) }}>
              <button class="btn btn-primary">Lihat QnA</button>
            </a>
          </td>
          <td>
          <form method="POST" action="{{ url('/pertanyaan/'.$pertanyaan->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('delete') }}
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection