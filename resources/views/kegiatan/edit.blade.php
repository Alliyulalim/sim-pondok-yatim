@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Kegiatan</div>
                    <div class="card-body">
                        <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" value="{{ $kegiatan->judul }}"
                                    class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="image" value="{{ $kegiatan->image }}"
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <input type="textarea" name="isi" value="{{ $kegiatan->isi }}"
                                    class="form-control @error('isi') is-invalid @enderror">
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kegiatan</label>
                                <input type="date" name="tgl_kegiatan" value="{{ $kegiatan->tgl_kegiatan }}"
                                    class="form-control @error('tgl_kegiatan') is-invalid @enderror">
                                @error('tgl_kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
