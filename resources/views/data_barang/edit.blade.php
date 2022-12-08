@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('data_barang.update', $data_barang->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" value="{{ $data_barang->kode_barang }}">
                            </input>
                            @error('kode_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $data_barang->nama_barang }}" class="form-control @error('nama_barang') is-invalid @enderror">
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Lab</label>
                            <input type="text" name="dari_lab" class="form-control @error('dari_lab') is-invalid @enderror" value="{{ $data_barang->dari_lab }}">
                            </input>
                            @error('dari_lab')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ $data_barang->status }}">
                            </input>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="">Kondisi</label>
                            <input type="text" name="kondisi" class="form-control @error('kondisi') is-invalid @enderror" value="{{ $data_barang->kondisi }}">
                            </input>
                            @error('kondisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Asal Barang</label>
                            <input type="text" name="asal_barang" class="form-control @error('asal_barang') is-invalid @enderror" value="{{ $data_barang->asal_barang }}">
                            </input>
                            @error('asal_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $data_barang->harga }}">
                            </input>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                                <a href="{{ route('data_barang.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection