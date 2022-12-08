@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('komputer.update', $komputer->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Keterangan</label>
                            <label for="exampleFormControlSelect1">Keterangan</label>
                                <select class="form-control" name="keterangan" id="">
                                  <option>komputer</option>
                                </select>
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Jumlah</label>
                            <input type="text" name="pc" class="form-control @error('pc') is-invalid @enderror" value="{{ $komputer->pc }}">
                            </input>
                            @error('pc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                                <a href="{{ route('komputer.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                            </div>
                        {{-- </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                               
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection