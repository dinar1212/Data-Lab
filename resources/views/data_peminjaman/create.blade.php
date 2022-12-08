@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Peminjaman</div>

                    <div class="card-body">
                        <form action="{{ route('data_peminjaman.store') }}" method="post">
                            @csrf
{{--                          
                            <div class="mb-3">
                                <label class="form-label">Kode Peminjaman</label>
                                <select name="id_data_barang" class="form-control @error('id_data_barang') is-invalid @enderror"
                                    id="">
                                    @foreach ($data_barang as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode_barang }}</option>
                                    @endforeach
                                </select>
                                @error('id_data_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                           
                            {{-- <div class="mb-1">
                                <label for="">Kode Pemminjam</label>
                                <input type="text" name="kode_peminjam" class="form-control @error('kode_peminjam') is-invalid @enderror"></input>
                                @error('kode_peminjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="mb-1">
                                <label for="">Nama Peminjam</label>
                                <input type="text" name="nama_peminjam" class="form-control @error('nama_peminjam') is-invalid @enderror"></input>
                                @error('nama_peminjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-1">
                                <label for="">Kode Barang</label>
                                <select name="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                                    @foreach ($data_barangs as $data_barang)
                                    <option value="{{ $data_barang->id }}">{{ $data_barang->kode_barang }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('barang_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> --}}
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
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" class="form-control @error('tanggal_pinjam') is-invalid @enderror"></input>
                                @error('tanggal_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Jumlah</label>
                                <input type="jumlah" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"></input>
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" class="form-control @error('tanggal_kembali') is-invalid @enderror"></input>
                                @error('tanggal_kembali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Contact</label>
                                <input type="number" name="contact" class="form-control @error('contact') is-invalid @enderror"></input>
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            &nbsp;
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                    <a href="{{ route('data_peminjaman.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection