@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('kel_lab.update', $kel_lab->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Lantai</label>
                            <input type="text" name="lantai" class="form-control @error('lantai') is-invalid @enderror" value="{{ $kel_lab->lantai }}">
                            </input>
                            @error('lantai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Jumlah PC</label>
                            <input type="text" name="lab" value="{{ $kel_lab->lab }}" class="form-control @error('lab') is-invalid @enderror">
                            @error('lab')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">No Lab</label>
                            <input type="text" name="no_lab" class="form-control @error('no_lab') is-invalid @enderror" value="{{ $kel_lab->no_lab }}">
                            </input>
                            @error('no_lab')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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