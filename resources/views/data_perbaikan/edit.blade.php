@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('data_perbaikan.update', $data_perbaikan->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Tanggal Perbaikan</label>
                            <input type="date" name="tanggal_perbaikan" class="form-control @error('tanggal_perbaikan') is-invalid @enderror" value="{{ $data_perbaikan->tanggal_perbaikan }}">
                            </input>
                            @error('tanggal_perbaikan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $data_perbaikan->nama_barang }}" class="form-control @error('nama_barang') is-invalid @enderror">
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Kerusakan</label>
                            <input type="text" name="kerusakan" class="form-control @error('kerusakan') is-invalid @enderror" value="{{ $data_perbaikan->kerusakan }}">
                            </input>
                            @error('kerusakan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Kebutuhan </label>
                            <input type="text" name="kebutuhan_komputer" class="form-control @error('kebutuhan_komputer') is-invalid @enderror" value="{{ $data_perbaikan->kebutuhan_komputer }}">
                            </input>
                            @error('kebutuhan_komputer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Hasil</label>
                            <input type="text" name="hasil" class="form-control @error('hasil') is-invalid @enderror" value="{{ $data_perbaikan->hasil }}">
                            </input>
                            @error('hasil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                                <a href="{{ route('data_perbaikan.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection