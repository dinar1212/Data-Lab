@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Lab</div>

                    <div class="card-body">
                        <form action="{{ route('kel_lab.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Lantai</label>
                                <input type="text" name="lantai" class="form-control @error('lantai') is-invalid @enderror"></input>
                                @error('lantai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Jumlah Lab</label>
                                <input type="text" name="lab" class="form-control @error('lab') is-invalid @enderror"></input>
                                @error('lab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Nama Lab</label>
                                <input type="no_lab" name="no_lab" class="form-control @error('no_lab') is-invalid @enderror"></input>
                                @error('no_lab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         
                            &nbsp;
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                    <a href="{{ route('kel_lab.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection