@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Barang</div>

                    <div class="card-body">
                        <form action="{{ route('data_barang.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Kode Barang</label>
                                <input type="text" name="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror"></input>
                                @error('kode_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror"></input>
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-1">
                                <label for="">LAB</label>
                                <input type="dari_lab" name="dari_lab" class="form-control @error('dari_lab') is-invalid @enderror"></input>
                                @error('dari_lab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            {{-- <div class="mb-1">
                                <label for="">Status</label>
                                <input type="status" name="status" class="form-control @error('status') is-invalid @enderror"></input>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            {{-- <div class="mb-1">
                                <label for="">Kondisi</label>
                                <input type="kondisi" name="kondisi" class="form-control @error('kondisi') is-invalid @enderror"></input>
                                @error('kondisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kondisi</label>
                                <select class="form-control" type="kondisi" name="kondisi" id="exampleFormControlSelect1">
                                  <option selected hidden>pilih kondisi</option>
                                  <option value="Baik">Baik</option>
                                  <option value="Rusak">Rusak</option>
                        
                                </select>
                              </div>
                            {{-- <div class="mb-1">
                                <label for="">Asal Barang</label>
                                <input type="asal_barang" name="asal_barang" class="form-control @error('asal_barang') is-invalid @enderror"></input>
                                @error('asal_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="mb-1">
                                <label for="">Jumlah</label>
                                <input type="harga" name="harga" class="form-control @error('harga') is-invalid @enderror"></input>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            &nbsp;
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