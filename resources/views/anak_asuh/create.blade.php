@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('anak_asuh.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan ID</label>
                            <select name="id_pengasuhs" class="form-control @error('id_pengasuhs') is-invalid @enderror">
                                @foreach($pengasuh as $data)
                                <option value="{{$data->id}}">{{$data->id_pengasuhs}}</option>
                                @endforeach
                            </select>
                            @error('id_pengasuhs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Anak</label>
                                <input type="text" name="nama_anak" class="form-control @error('nama_anak') is-invalid @enderror">
                                @error('nama_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tanggal lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror">
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

@section('css')

@endsection

@section('js')

@endsection
