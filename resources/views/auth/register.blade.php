<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    <title>Registrasi | Surgaki</title>
</head>

<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title">Registrasi Yah</h2>
                <h6 class="card-subtitle text-muted mb-5 fw-bold">Masukan Data anda dengan benar!</h6>

                <!-- Update the form action to your registration route -->
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <!-- CSRF Token for form security -->

                    <!-- Add a name field if needed -->
                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Lengkap*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password*</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Min 8 character" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password*</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" placeholder="Min 8 character" required>
                    </div>

                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-success btn-login">Daftar</button>
                    </div>

                    <div class="mt-3">
                        <label>Sudah punya akun? <a href="#" class="link">Login disini</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('failed'))
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    --}}
</body>

</html>