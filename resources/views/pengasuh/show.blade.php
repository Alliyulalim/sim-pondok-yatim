@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pengasuh</div>
                    <div class="card-body">
                        <form action="{{ route('pengasuh.update', $pengasuh->id) }}" method="post">
                            @csrf
                            @method('put')
                             <div class="form-group">
                                <label for="">Masukan Nama Pengasuh</label>
                                <input type="number" name="id_pengasuhs" value="{{ $pengasuh->id_pengasuhs }}" disabled
                                    class="form-control @error('id_pengasuhs') is-invalid @enderror">
                                @error('nama_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Pengasuh</label>
                                <input type="text" name="nama_pengasuh" value="{{ $pengasuh->nama_pengasuh }}" disabled
                                    class="form-control @error('nama_pengasuh') is-invalid @enderror">
                                @error('nama_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">jenis kelamin</label>
                                <input type="text" name="jk" value="{{ $pengasuh->jk }}" disabled
                                    class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tanggal lahir</label>
                                <input type="text" name="tgl_lahir" value="{{ $pengasuh->tgl_lahir }}" disabled
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                            <a href="{{url('admin/pengasuh')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
