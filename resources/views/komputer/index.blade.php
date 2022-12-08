@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Data Komputer</h3>
                <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Data Komputer
                        <a href="{{ route('komputer.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                        {{-- <th>Monitor</th>
                                        <th>Keyboard</th>
                                        <th>Mouse</th>
                                        <th>Kabel Power</th>
                                        <th>Kabel PGA</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($komputer as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->pc }}</td>
                                            {{-- <td>{{ $data->monitor }}</td>
                                            <td>{{ $data->keyboard }}</td>
                                            <td>{{ $data->mouse }}</td>
                                            <td>{{ $data->kabel_power }}</td>
                                            <td>{{ $data->kabel_pga }}</td> --}}
                                            <td>
                                                <form action="{{ route('komputer.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('komputer.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('komputer.show', $data->id) }}"
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