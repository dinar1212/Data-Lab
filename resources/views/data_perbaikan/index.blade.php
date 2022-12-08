@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Data Perbaikan</h3>
                <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Data Perbaikan
                        <a href="{{ route('data_perbaikan.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Perbaikan</th>
                                        <th>Nama Barang</th>
                                        <th>Kerusakan</th>
                                        {{-- <th>Penanganan</th> --}}
                                        <th>Level </th>
                                        {{-- <th>Hasil</th> --}}
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data_perbaikan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tanggal_perbaikan }}</td>
                                            <td>{{ $data->barang->nama_barang }}</td>
                                            <td>{{ $data->kerusakan }}</td>
                                            {{-- <td>{{ $data->penanganan }}</td> --}}
                                            <td>{{ $data->kebutuhan_komputer }}</td>
                                            {{-- <td>{{ $data->hasil }}</td> --}}
                                            <td>{{ $data->ket }}</td>
                                            <td>
                                                <form action="{{ route('data_perbaikan.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('data_perbaikan.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('data_perbaikan.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> | --}}
                                                    <button type="submit" class="btn btn-sm fa fa-trash-o btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection