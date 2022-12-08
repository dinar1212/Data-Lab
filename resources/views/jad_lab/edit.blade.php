@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('jad_lab.update', $jad_lab->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $jad_lab->nama }}">
                            </input>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Hari</label>
                            <input type="text" name="hari" class="form-control @error('hari') is-invalid @enderror" value="{{ $jad_lab->hari }}">
                            </input>
                            @error('hari')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $jad_lab->tanggal }}">
                            </input>
                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Jam</label>
                            <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ $jad_lab->jam }}">
                            </input>
                            @error('jam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="">Tanggal</label>
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