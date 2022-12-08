<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="bg-white text-center navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset ('assets/images/download.png')}}" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/faces/ptipd.png')}}" alt=""></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
        <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
      </form>
      <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
        <li class="nav-item">
          <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{asset('assets/images/uin.png')}}" alt=""></a>
       
       
          <a href="{{ route('logout')}}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"class="text-secondary">
                      {{ __('Logout') }}</a> 
                     
          
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                      </form>
                      </li>
      </ul>
     <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span  class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>