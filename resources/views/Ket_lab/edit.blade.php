@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('ket_lab.update', $ket_lab->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">No.Lab</label>
                            <input type="text" name="no_lab" value="{{ $ket_lab->no_lab }}" class="form-control @error('no_lab') is-invalid @enderror">
                            @error('no_lab')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Komputer</label>
                            <input type="text" name="komputer" class="form-control @error('komputer') is-invalid @enderror" value="{{ $ket_lab->komputer }}">
                            </input>
                            @error('komputer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Kerusakan</label>
                            <input type="text" name="rusak" class="form-control @error('rusak') is-invalid @enderror" value="{{ $ket_lab->rusak }}">
                            </input>
                            @error('rusak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kondisi</label>
                            <select class="form-control" name="kondisi" id="">
                              <option>Baik</option>
                            </select>
                          </div>
                      
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                                <a href="{{ route('ket_lab.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection