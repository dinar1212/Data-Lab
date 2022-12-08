@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Data Peminjaman</h3>
                <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Data Peminjaman
                        <a href="{{ route('data_peminjaman.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                        
                    </div>
                    <div class="card-body">
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <th
                                ead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Peminjaman</th>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Contact</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data_peminjaman as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_peminjam }}</td>
                                            {{-- <td>{{ $data->data_barang->kode_barang }}</td> --}}
                                            <td>{{ $data->nama_peminjam }}</td>
                                            <td>{{ $data->barang->nama_barang }}</td>
                                            <td>{{ $data->tanggal_pinjam }}</td>
                                            <td>{{ $data->jumlah }}</td>
                                            <td>{{ $data->tanggal_kembali }}</td>
                                            <td>{{ $data->contact }}</td>
                                           
                                            <td>
                                                <form action="{{ route('data_peminjaman.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('data_peminjaman.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('data_peminjaman.show', $data->id) }}"
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