@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Kegiatan Pondok Yatim</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Kegiatan
                        <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Kegiatan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Isi</th>
                                    <th>Tanggal Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($kegiatan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="image"></td>
                                        <td>{{ $data->isi }}</td>
                                        <td>{{ $data->tgl_kegiatan }}</td>
                                        <td>
                                            <form action="{{ route('kegiatan.destroy', $data->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('kegiatan.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('kegiatan.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
