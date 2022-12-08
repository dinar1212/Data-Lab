@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Jadwal Lab</h3>
                <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Jadwal Lab
                        <a href="{{ route('jad_lab.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        {{-- <th>Jam</th> --}}
                                        <th>Lantai</th>
                                        <th>No Lab</th>
                                        <th>Kegiatan</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($jad_lab as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->hari }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            {{-- <td>{{ $data->jam }}</td> --}}
                                            <td>{{ $data->lantai }}</td>
                                            <td>{{ $data->kel->no_lab }}</td>
                                            <td>{{ $data->kegiatan }}</td>
                                            <td>{{ $data->tanggal_berakhir }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>
                                                <form action="{{ route('jad_lab.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('jad_lab.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('jad_lab.show', $data->id) }}"
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