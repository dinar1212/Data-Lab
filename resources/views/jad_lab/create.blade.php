@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Jadwal Lab</div>

                    <div class="card-body">
                        <form action="{{ route('jad_lab.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"></input>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Hari</label>
                                <input type="text" name="hari" class="form-control @error('hari') is-invalid @enderror"></input>
                                @error('hari')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Kegiatan</label>
                                <input type="text" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror"></input>
                                @error('kegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"></input>
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Lantai</label>
                                <select class="form-control" name="lantai" id="exampleFormControlSelect1">
                                  <option selected hidden>pilih lantai</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                        
                                </select>
                              </div>
                              <div class="mb-1">
                                <label for="">Nomor Lab</label>
                                <select name="kel_id" class="form-control @error('kel_id') is-invalid @enderror">
                                    @foreach ($kel_labs as $kel_lab)
                                    <option value="{{ $kel_lab->id }}">{{ $kel_lab->no_lab }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('kel_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                              <label for="">Tanggal Berakhir</label>
                              <input type="date" name="tanggal_berakhir" class="form-control @error('tanggal_berakhir') is-invalid @enderror"></input>
                              @error('tanggal_berakhir')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                              
                          <div class="mb-3">
                            <label for="">Keterangan</label>
                            <select class="form-control" name="keterangan" id="">
                              <option value="digunakan">digunakan</option>
                              <option value="selesai">selesai</option>
                            </select>
                            @error('Keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                    <a href="{{ route('jad_lab.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection