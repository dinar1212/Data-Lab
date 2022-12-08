
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template2/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('template2/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template2/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('template2/css/style.css')}}">

    <title>DATA LAB || UIN SGD BANDUNG</title>
  </head>
  <body>

    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(219, 46%, 82%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(204, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#7e8a8a, #4175b8);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#87b4b8, #4175b8);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Selamat Datang  <br />
          <span style="color: hsl(218, 81%, 75%)">Website Pengolahan Data Lab PTIPD</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
         
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
           
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <img src="{{asset('assets/images/uin1.png')}}" alt="" width="350" height="250">
              <form action="{{route('login')}}" method="post">

              @csrf
                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('email')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                  <div class="input-group-append ">
                    <div class="input-group-text ">
                      <i class="bi bi-lock"></i>
                    </div>
                  </div>
                  @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                  @enderror
                </div>

              <!-- Checkbox -->
              {{-- <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div> --}}

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>
              {{-- <p class="mb-1">
                <a href="#">I forgot my password</a>
              </p>
              <p class="mb-0">
                <a href="{{url('register')}}" class="text-center">Register a new membership</a>
              </p> --}}

              {{-- <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
  

  
  
  
    <script src="{{asset('template2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('template2/js/popper.min.js')}}"></script>
    <script src="{{asset('template2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template2/js/main.js')}}"></script>
  </body>
</html>

