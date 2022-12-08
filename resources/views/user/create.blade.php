@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Admin</div>

                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"></input>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"></input>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"></input>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            
                            
                            &nbsp;
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection