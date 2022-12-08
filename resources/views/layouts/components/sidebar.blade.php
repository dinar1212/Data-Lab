<!-- partial:partials/_sidebar.html -->
<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info">
      <img src="{{asset('assets/images/uin.png')}}" alt="">
     
      <p class="name"d-block">{{Auth::user()->name}}</p>
      <p class="designation">Admin</p>
      <span class="online"></span>
    </div>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/tambahadmin">
          <img src="{{asset('assets/images/icons/1.png')}}" alt="">
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
          <img src="{{asset('assets/images/icons/005-forms.png')}}" alt="">
          <span class="menu-title">Kelola Lab<i class="fa fa-sort-down"></i></span>
        </a>
        <div class="collapse" id="sample-pages" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/ket_lab">
                Ruangan 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kel_lab">
                Lantai
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/komputer">
                Komputer
              </a>
          </ul>
        </div>
      </li>

     
     
    

      {{-- <li class="nav-item">
        <a class="nav-link" href="/kel_lab">
          <img src="{{asset('assets/images/icons/005-forms.png')}}" alt="">
         
          <span class="menu-title">Kelola Lab</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/jad_lab">
          <img src="{{asset('assets/images/icons/2.png')}}" alt="">
          <span class="menu-title">Jadwal Lab</span>
        </a>
      </li>

           
      <li class="nav-item">
        <a class="nav-link" href="/data_barang">
          <img src="{{asset('assets/images/file-icons/64/002-tool.png')}}" alt="">
         
          <span class="menu-title">Data Barang</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/data_peminjaman">
          <img src="{{asset('assets/images/file-icons/64/006-record.png')}}" alt="">
         
          <span class="menu-title">Data Peminjaman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/data_perbaikan">
          <img src="{{asset('assets/images/icons/018-warning.png')}}" alt="">
         
          <span class="menu-title">Data Perbaikan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#sample-pages2" aria-expanded="false" aria-controls="sample-pages">
          <img src="{{asset('assets/images/icons/005-calendar.png')}}" alt="">
          <span class="menu-title">Laporan<i class="fa fa-sort-down"></i></span>
        </a>
        <div class="collapse" id="sample-pages2" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/laporan_barang" target="_blank">
                Laporan Barang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/laporan" target="_blank">
                Laporan Peminjaman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/laporan_perbaikan" target="_blank">
                Laporan Perbaikan
              </a>
          </ul>
        </div>
      </li>

     
    
    
    
    
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="{{asset('assets/images/icons/10.png')}}" alt="">
          <span class="menu-title">Settings</span>
        </a>
      </li> --}}
    </ul>
  </nav>