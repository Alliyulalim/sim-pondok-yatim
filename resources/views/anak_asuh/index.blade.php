@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Anak</h1>
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
                        <h4>Data Anak</h4>
                        <a href="{{ route('anak_asuh.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>NO</th>
                                    <th>ID_Pengasuh</th>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($anak_asuh as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->id_pengasuhs }}</td>
                                        <td>{{ $data->nama_pengasuh }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>
                                            <form action="{{ route('anak_asuh.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('anak_asuh.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('anak_asuh.show', $data->id) }}"
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
