@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Komputer</div>

                    <div class="card-body">
                        <form action="{{ route('komputer.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Keterangan</label>
                                <select class="form-control" name="keterangan" id="">
                                  <option>komputer</option>
                                </select>
                              </div>
                            <div class="mb-1">
                                <label for="">Jumlah</label>
                                <input type="text" name="pc" class="form-control @error('pc') is-invalid @enderror"></input>
                                @error('pc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-1">
                                <label for="">Monitor</label>
                                <input type="text" name="monitor" class="form-control @error('monitor') is-invalid @enderror"></input>
                                @error('monitor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Keyboard</label>
                                <input type="text" name="keyboard" class="form-control @error('keyboard') is-invalid @enderror"></input>
                                @error('keyboard')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Mouse</label>
                                <input type="text" name="mouse" class="form-control @error('mouse') is-invalid @enderror"></input>
                                @error('mouse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Kabel Power</label>
                                <input type="text" name="kabel_power" class="form-control @error('kabel_power') is-invalid @enderror"></input>
                                @error('kabel_power')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">Kabel PGA</label>
                                <input type="text" name="kabel_pga" class="form-control @error('kabel_pga') is-invalid @enderror"></input>
                                @error('kabel_pga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            &nbsp;
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                    <a href="{{ route('komputer.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection