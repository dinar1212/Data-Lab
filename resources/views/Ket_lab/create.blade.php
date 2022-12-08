@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Ruangan</div>

                    <div class="card-body">
                        <form action="{{ route('ket_lab.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Nomor Lab</label>
                                <input type="text" name="no_lab" class="form-control @error('no_lab') is-invalid @enderror"></input>
                                @error('no_lab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-1">
                                <label for="">Komputer</label>
                                <input type="text" name="komputer" class="form-control @error('komputer') is-invalid @enderror"></input>
                                @error('komputer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Kerusakan</label>
                                <input type="text" name="rusak" class="form-control @error('rusak') is-invalid @enderror"></input>
                                @error('rusak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"></input>
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             --}}
                             <div class="form-group">
                                <label for="exampleFormControlSelect1">Kondisi</label>
                                <select class="form-control" name="kondisi" id="">
                                  <option>Baik</option>
                                  <option>Sedang</option>
                                  <option>Parah</option>
                                </select>
                              </div>
                            &nbsp;
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                    <a href="{{ route('ket_lab.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection