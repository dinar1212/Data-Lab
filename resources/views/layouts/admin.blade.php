<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DATA LAB || UIN SGD BANDUNG</title>
  <link rel="stylesheet" href="{{asset('assets/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('assets/images/faces/ptipd.png')}}" />
  
  
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
 {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
 
 

<body>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
  <span class="navbar-toggler-icon"></span>
</button>
  
<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.components.navbar');
    
    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.components.sidebar');

        

        <!-- partial -->
        <div class="content-wrapper">
          
         
          
          <section class="content">
        
            @yield('content')
            
          </section>
         
          
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#"> PTIPD UIN SGD</a> &copy; 2022
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    
  </div>
  
  <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/popper.js')}}/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/chart.js')}}/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/misc.js')}}"></script>
  <script src="{{asset('assets/js/chart.js')}}"></script>
  <script src="{{asset('assets/js/maps.js')}}"></script>
  <script src="{{ asset('DataTables/DataTables-1.12.1')}}"></script>
  <script>
    $(document).ready(function() {
         $('#dataTable').DataTable({
           
         });
        });
        </script>
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('DataTables/datatables.min.js') }}"></script>
</body>

</html>
