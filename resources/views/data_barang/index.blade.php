@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Data Barang</h3>
                <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Data Barang
                        <a href="{{ route('data_barang.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        {{-- <th>LAB</th>
                                        <th>Status</th> --}}
                                        <th>Kondisi</th>
                                        {{-- <th>Asal Barang</th> --}}
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data_barang as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_barang }}</td>
                                            <td>{{ $data->nama_barang }}</td>
                                            {{-- <td>{{ $data->dari_lab }}</td>
                                            <td>{{ $data->status }}</td> --}}
                                            <td>{{ $data->kondisi }}</td>
                                            {{-- <td>{{ $data->asal_barang }}</td> --}}
                                            <td>{{ $data->harga }}</td>
                                            <td>
                                                <form action="{{ route('data_barang.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('data_barang.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('data_barang.show', $data->id) }}"
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