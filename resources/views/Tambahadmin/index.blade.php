@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3 class="page-heading mb-4">Dashboard</h3>
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 mb-4">
                      <div class="border border-secondary card card-statistics">
                        <div class="border border-5 card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <h4 class="text-danger">
                                <i class="fa fa-table float-right  highlight-icon" aria-hidden="true"></i>
                              </h4>
                            </div>
                            <div class="float-right">
                              <p class="card-text text-dark">Jadwal Lab</p>
                              <h4 class="bold-text">{{$jad_labs}}</h4>
                            </div>
                          </div>
                          <p class="text-muted">
                            {{-- <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth --}}
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 mb-4">
                      <div class="border border-secondary card card-statistics">
                        <div class="border border-5 card-body ">
                          <div class="clearfix">
                            <div class="float-left">
                              <h4 class="text-warning">
                                <i class="fa fa-bookmark highlight-icon" aria-hidden="true"></i>
                              </h4>
                            </div>
                            <div class="float-right">
                              <p class="card-text text-dark">Ruangan</p>
                              <h4 class="bold-text">{{$ket_labs}}</h4>
                            </div>
                          </div>
                          <p class="text-muted">
                            {{-- <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Product-wise sales --}}
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 mb-4">
                      <div class="border border-secondary card card-statistics">
                        <div class="border border-5 card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <h4 class="text-success">
                                <i class="fa fa-desktop highlight-icon" aria-hidden="true"></i>
                              </h4>
                            </div>
                            <div class="float-right">
                              <p class="card-text text-dark">Perbaikan</p>
                              <h4 class="bold-text">{{$data_perbaikans}}</h4>
                            </div>
                          </div>
                          <p class="text-muted">
                            {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Weekly Sales --}}
                          </p>
                        </div>
                      </div>
                    </div>
               
                    {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                      <div class="card card-statistics">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <h4 class="text-primary">
                                <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                              </h4>
                            </div>
                            <div class="float-right">
                              <p class="card-text text-dark">Followers</p>
                              <h4 class="bold-text">+62,500</h4>
                            </div>
                          </div>
                          <p class="text-muted">
                            <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                          </p>
                        </div>
                      </div>
                    </div> --}}
                  </div>


                {{-- <div class="card">
                    <div class="card-header">
                        Data Admin
                        <a href="{{ route('tambahadmin.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table table-hover table-striped">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($tambahadmin as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                              <div class="d-flex">
                                                  <!--begin::Thumbnail-->
                                                  <img src="{{ $data->image() }}" style="width: 100px; height:100px;" alt="">
                                              </div>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->password }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                          
                                           
                                          </td>
                                            <td>
                                                <form action="{{ route('tambahadmin.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('tambahadmin.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('tambahadmin.show', $data->id) }}" --}}
                                                        {{-- class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |  --}}
                                                    {{-- <button type="submit" class="btn btn-sm fa fa-trash-o btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                  </div> --}}
                  <h3 class="page-heading mb-4">Jadwal Lab</h3>
                  <div class="card">
                      <div class="card-header" style="background-color: rgb(232, 232, 235)">
                          Jadwal Lab
                          <a href="{{ route('jad_lab.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                              Tambah Data
                          </a>
                      </div>
  
                      <div class="card-body border">
                          <div class="table table-striped">
                              <table class="table align-middle" id="dataTable">
                                  <thead style="background-color: rgb(232, 232, 235)">
                                      <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Hari</th>
                                          <th>Tanggal</th>
                                          {{-- <th>Jam</th> --}}
                                          <th>Lantai</th>
                                          <th>No Lab</th>
                                          <th>Kegiatan</th>
                                          <th>Keterangan</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php $no = 1; @endphp
                                      @foreach ($jad_lab as $data)
                                          <tr>
                                              <td>{{ $no++ }}</td>
                                              <td>{{ $data->nama }}</td>
                                              <td>{{ $data->hari }}</td>
                                              <td>{{ $data->tanggal }}</td>
                                              {{-- <td>{{ $data->jam }}</td> --}}
                                              <td>{{ $data->lantai }}</td>
                                              <td>{{ $data->kel->no_lab }}</td>
                                              <td>{{ $data->kegiatan }}</td>
                                              <td>{{ $data->keterangan }}</td>
                                              <td>
                                                  <form action="{{ route('jad_lab.destroy', $data->id) }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <a href="{{ route('jad_lab.edit', $data->id) }}"
                                                          class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                      </a> |
                                                      {{-- <a href="{{ route('jad_lab.show', $data->id) }}"
                                                          class="btn btn-sm btn-outline-warning">
                                                          Show
                                                      </a> | --}}
                                                      <button type="submit" class="btn btn-sm fa fa-trash-o btn-outline-danger"
                                                          onclick="return confirm('Apakah Anda Yakin?')">
                                                      </button>
                                                  </form>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
<br>
                  <h3 class="page-heading mb-4">Ruangan</h3>
                  <div class="card">
                    <div class="card-header" style="background-color: rgb(232, 232, 235)">
                        Ruangan Lab
                        <a href="{{ route('ket_lab.create') }}" class="btn fa fa-plus btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body" >
                        <div class="table table-striped">
                            <table class="table align-middle" id="dataTable">
                                <thead style="background-color: rgb(232, 232, 235)">
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Lab</th>
                                        <th>Kondisi</th>
                                        {{-- <th>Komputer</th>
                                        <th>Kerusakan</th>
                                        <th>Keterangan</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($ket_lab as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->no_lab }}</td>
                                            <td>{{ $data->kondisi }}</td>
                                            {{-- <td>{{ $data->komputer }}</td>
                                            <td>{{ $data->rusak }}</td>
                                            <td>{{ $data->keterangan }}</td> --}}
                                            <td>
                                                <form action="{{ route('ket_lab.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('ket_lab.edit', $data->id) }}"
                                                        class="btn btn-sm fa fa-pencil-square btn-outline-success">    
                                                    </a> |
                                                    {{-- <a href="{{ route('ket_lab.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> | --}}
                                                    <button type="submit" class="btn btn-sm fa fa-trash-o btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
               
                </div>
            </div>
        </div>
    </div>
@endsection



