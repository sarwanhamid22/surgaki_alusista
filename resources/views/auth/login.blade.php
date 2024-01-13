<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    <title>Login | Surgaki</title>
  </head>
  <body>
    <div class="container">
      <div class="card login-form">             
          <div class="card-body">
              <h2 class="card-title">Welcome Back</h2>
              <h6 class="card-subtitle text-muted mb-5 fw-bold">Please login to use this site!</h6>
              
              <!-- Button for Google Sign-up (Assuming it's for OAuth) -->
              <div class="d-grid mt-5 mb-4">
                  <button type="submit" class="btn btn-light btn-gmail"><img src="{{ asset('assets/img/google.png') }}" alt="Gmail" class="img-google me-2">Sign up with Gmail</button>
              </div>
  
              <h6 class="card-subtitle text-muted mb-4 text-center">or login with Email</h6>
  
              <!-- Update the form action to your login route -->
              <form action="{{ route('login') }}" method="POST">
                  @csrf <!-- CSRF Token for form security -->
                  <div class="mb-4">
                      <label for="email" class="form-label">Email*</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your Email" required>
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label">Password*</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Min 8 character" required>
                  </div>
  
                  <div class="d-flex justify-content-between">
                      <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="remember" name="remember">
                          <label class="form-check-label" for="remember">Remember me</label>
                      </div>
  
                      <div>
                          <a href="#" class="link">Forgot Password?</a>
                      </div>
                  </div>
  
                  <div class="d-grid mt-5">
                      <button type="submit" class="btn btn-success btn-login">Login</button>
                  </div>
  
                  <div class="mt-3">
                      <label>Not registered yet? <a href="/register" class="link">Create an account</a></label>
                  </div>
              </form>
          </div>
      </div>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('failed'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: {!! json_encode(session('failed')) !!},
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    
  </body>
</html>