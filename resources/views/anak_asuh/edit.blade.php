@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('AnakAsuh.update', $anak_asuh->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama Anak</label>
                                <input type="text" name="nama_anak" value="{{ $anak_asuh->nama_anak }}"
                                    class="form-control @error('nama_anak') is-invalid @enderror">
                                @error('nama_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">jenis kelamin</label>
                                <input type="text" name="jk" value="{{ $anak_asuh->jk }}"
                                    class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tempat, tanggal lahir</label>
                                <input type="text" name="tgl_lahir" value="{{ $anak_asuh->tgl_lahir }}"
                                    class="form-control @error('ttl') is-invalid @enderror">
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan status</label>
                                <input type="text" name="status" value="{{ $anak_asuh->status }}"
                                    class="form-control @error('status') is-invalid @enderror">
                                @error('status')
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
