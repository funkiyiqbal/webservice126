@extends('admin-theme._master')

@section('judul', 'Data Soal')

@section('isi')


<div class="row mt-4">
    <div class="col-10">
        @if ($message = Session::get('pesan'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">Data
                <a class="btn btn-sm btn-primary float-end" href="{{ route('pertanyaan.add') }}">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>Jenis</th>
                            <th>Jawaban</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perbaikans as $perbaikans)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $perbaikans->soal_26}}</td>
                            <td>{{ $perbaikans->jenis_26}}</td>
                            <td>{{ $perbaikans->jawaban_26}}</td>
                            <td>
                                <a href="{{ route('pertanyaan.delete', $perbaikans->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">Delete</a>
                            </td>
                            <td>
                                <a href="{{ route('pertanyaan.edit', $perbaikans->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection