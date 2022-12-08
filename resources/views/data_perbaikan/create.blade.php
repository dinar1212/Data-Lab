@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Perbaikan</div>

                    <div class="card-body">
                        <form action="{{ route('data_perbaikan.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Tanggal Perbaikan</label>
                                <input type="date" name="tanggal_perbaikan" class="form-control @error('tanggal_perbaikan') is-invalid @enderror"></input>
                                @error('tanggal_perbaikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Nama Barang</label>
                                <select name="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                                    @foreach ($data_barangs as $data_barang)
                                    <option value="{{ $data_barang->id }}">{{ $data_barang->nama_barang }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('barang_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Kerusakan</label>
                                <input type="text" name="kerusakan" class="form-control @error('kerusakan') is-invalid @enderror"></input>
                                @error('kerusakan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-1">
                                <label for="">Penanganan</label>
                                <input type="text" name="penanganan" class="form-control @error('penanganan') is-invalid @enderror"></input>
                                @error('penanganan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Level</label>
                                <select class="form-control" name="kebutuhan_komputer" id="">
                                  <option>Sedang</option>
                                  <option>Parah</option>
                                </select>
                              </div>
                            {{-- <div class="mb-1">
                                <label for="">Hasil</label>
                                <input type="text" name="hasil" class="form-control @error('hasil') is-invalid @enderror"></input>
                                @error('hasil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Keterangan</label>
                                <select class="form-control" name="ket" id="">
                                  <option>perbaikan</option>
                                </select>
                              </div>
                           
                            &nbsp;
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