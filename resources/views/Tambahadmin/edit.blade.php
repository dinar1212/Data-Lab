@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Edit</div>

                <div class="card-body">
                    <form action="{{ route('tambahadmin.update', $tambahadmin->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-title">
                            <h2>Image</h2>
                        </div>
                        <!--end::Card title-->
                  
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>
                            .image-input-placeholder {
                                background-image: url(' assets/media/svg/files/blank-image.svg');

                            }

                            [data-theme="dark"] .image-input-placeholder {
                                background-image: url(' assets/media/svg/files/blank-image-dark.svg');
                            }
                        </style>
                        <!--end::Image input placeholder-->
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px">
                                @if (isset($tambahadmin) && $tambahadmin->foto)
                                <img src="{{ asset('images/tambahadmin/' . $tambahadmin->foto) }}"
                                    class="img-rounded img-responsive" style="width:150px; height:150px;" alt="">
                                @endif
                            </div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <!--begin::Icon-->
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--end::Icon-->
                                <!--begin::Inputs-->

                                <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto"
                                    value="{{ $tambahadmin->foto }}">
                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg
                            image files are accepted</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->

            </div>
                        <div class="mb-3">
                            <label for="">NIP</label>
                            <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ $tambahadmin->nip }}">
                            </input>
                            @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="{{ $tambahadmin->nama }}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $tambahadmin->email }}">
                            </input>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ $tambahadmin->password }}">
                            </input>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        

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