@extends('admin-theme._master')

@section('judul', 'Tambah Pelanggan')

@section('isi')

<body>
    <div class="container">
        <div class="alert alert-success">Edit Data Biaya</div>
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
                <form action="{{ route('pertanyaan.update', $perbaikans->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Soal</label>
                        <input type="text" class="form-control form-control-sm" name="soal_26" id="" aria-describedby="helpId" placeholder="" value="{{ $perbaikans->soal_26}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Pertanyaan</label>
                        <input type="text" class="form-control form-control-sm" name="jenis_26" id="" aria-describedby="helpId" placeholder="" value="{{ $perbaikans->jenis_26 }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jawaban</label>
                        <input type="text" class="form-control form-control-sm" name="jawaban_26" id="" aria-describedby="helpId" placeholder="" value="{{ $perbaikans->jawaban_26 }}">
                    </div>

                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                    <a href="{{ route('pertanyaan.index') }}" class="btn btn-warning">Kembali</a>
                </form>

            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
@endsection