@extends('admin-theme._master')

@section('judul', 'Tambah Pelanggan')

@section('isi')

<body>
    <div class="container">
        <div class="alert alert-success">Tambah Data Biaya</div>
        <div class="row">
            <div class="col-5">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Cek input anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('pertanyaan.simpan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Soal</label>
                        <input type="text" class="form-control form-control-sm" name="soal_26" id="" aria-describedby="helpId" placeholder="" value="{{ old('soal_26') }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Pertanyaan</label>
                        <input type="text" class="form-control form-control-sm" name="jenis_26" id="" aria-describedby="helpId" placeholder="" value="{{ old('jenis_26') }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jawaban</label>
                        <input type="text" class="form-control form-control-sm" name="jawaban_26" id="" aria-describedby="helpId" placeholder="" value="{{ old('jawaban_26') }}">

                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                        <a href="{{ route('pertanyaan.index') }}" class="btn btn-warning">Kembali</a>

                </form>

            </div>
        </div>
    </div>

    @endsection