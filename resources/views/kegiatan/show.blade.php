@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Tampil Kegiatan</div>
                    <div class="card-body">
                        <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" value="{{ $kegiatan->judul }}" disabled
                                    class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <br>
                                <img src="{{$kegiatan->image() }}" style="width:150px; height:150px; padding:10px;"/>
                                <input type="images" name="image" value="{{ $kegiatan->image }}" disabled
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <input type="textarea" name="isi" value="{{ $kegiatan->isi }}" disabled
                                    class="form-control @error('isi') is-invalid @enderror">
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kegiatan</label>
                                <input type="date" name="tgl_kegiatan" value="{{ $kegiatan->tgl_kegiatan }}" disabled
                                    class="form-control @error('tgl_kegiatan') is-invalid @enderror">
                                @error('tgl_kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <a href="{{url('admin/kegiatan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
