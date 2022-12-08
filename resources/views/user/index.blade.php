@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
              
                <div class="card">
                    <div class="card-header">
                        Data Admin
                        <a href="{{ route('user.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-hover table-striped">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                      
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($user as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                           
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->password }}</td>
                                          
                                           
                                          </td>
                                            <td>
                                                <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('user.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('user.show', $data->id) }}"
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
