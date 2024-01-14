<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/sytle.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Surgaki | Alusista</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Surgaki.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#tentangkami">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#pangkalan">Pangkalan Militer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#operasimiliter">Operasi Militer</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="/login" class="btn btn-danger">Login</a>
          </form>
        </div>
      </div>
  </nav>

  <section id="hero" >
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
            <div class="hero-text">Alutsista Terpantau, <br> Pertahanan Terjamin</div>
            <h4 class="tulis"></h4>
        </div>
    </div> 
</section>

<section id="alusista" style="margin-top: -30px">
    <div class="container col-xxl-9">
        <div class="row">
            <div class="col-lg-3 img-hover-zoom col-md-6 col mb-2 fw-bold" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pesawat Tempur</p>
                    </div>
                    <img src="{{ asset('assets/img/030-jet.png') }}" height="60" width="60" alt="">
                </div>
            </div>
            <div class="col-lg-3 img-hover-zoom col-md-6 col mb-2 fw-bold" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Tank Superkuat</p>
                    </div>
                    <img src="{{ asset('assets/img/033-tank.png') }}" height="60" width="60" alt="">
                </div>
            </div>
            <div class="col-lg-3 img-hover-zoom col-md-6 col mb-2 fw-bold" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Helikopter Tempur</p>
                    </div>
                    <img src="{{ asset('assets/img/035-helicopter.png') }}" height="60" width="60" alt="">
                </div>
            </div>
            <div class="col-lg-3 img-hover-zoom col-md-6 col mb-2 fw-bold" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Tank Ambhibi</p>
                    </div>
                    <img src="{{ asset('assets/img/037-amphibian.png') }}" height="60" width="60" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tentangkami" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6" data-aos="fade-down-right">
                <div class="text-container">
                    <h2 class="tentangkami-title fw-bold mb-4">Tentang Kami</h2>
                    <h4 class="fw-bold mb-2 text-white">Lorem ipsum dolor sit amet.</h4>
                    <p class="mb-3 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt repudiandae laboriosam officia mollitia, illo quis eveniet corrupti impedit quaerat labore?</p>
                    <button class="btn btn-outline-danger text-white">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-down-left">
                <img src="{{ asset('assets/img/tentangkami.jpg') }}" alt="Tentang Kami" class="img-fluid img-hover-zoom">
            </div>
        </div>
    </div>
</section>

<section id="pangkalan" class="py-5">
    <div class="container text-center text-white">
        <div class="row" data-aos="zoom-in">
            <div class="col-12" >
                <h2 class="pangkalan-title fw-bold mb-4">Pangkalan Militer</h2>
            </div>
            <div class="pangkalan-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div id="map" style="width:100%; height:500px; border-radius:0.5rem;"></div>
            </div>
        </div>
    </div>
</section>

<section id="operasimiliter" class="selection-foto parallax py-5">
    <div class="container py-5">
        <div class="row mb-4"> 
            <div class="col" data-aos="zoom-out">
                <h2 class="operasimiliter-title text-center fw-bold">Operasi Militer</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi1.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi2.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi3.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi4.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi5.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi6.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/operasi1.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <img src="{{ asset('assets/img/tentangkami.jpg') }}" alt="Tentang Kami" class="img-fluid rounded img-hover-zoom" data-aos="zoom-out">
            </div>
        </div>
        <div class="row" data-aos="zoom-out">
            <div class="col text-center">
                <a href="" class="btn btn-outline-white text-white">Operasi Militer Lainnya</a>
            </div>
        </div>
    </div>
</section>

    <section style="margin-top: 5rem;">
        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#hero" class="nav-link px-2 text-white">Home</a></li>
                <li class="nav-item"><a href="#tentangkami" class="nav-link px-2 text-white">Tentang Kami</a></li>
                <li class="nav-item"><a href="#pangkalan" class="nav-link px-2 text-white">Pangkalan Militer</a></li>
                <li class="nav-item"><a href="#operasimiliter" class="nav-link px-2 text-white">Operasi Militer</a></li>
              </ul>
              <p class="text-center text-white">&copy; 2023 Surgaki dibuat ❤️</p>
            </footer>
        </div>     
    </section>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmVs0o8LdH8QT9s_mtB_dM7sfqGMgII5g&callback=initMap"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/TextPlugin.min.js"></script>
    <script>
        AOS.init({
            once:true,
            duration: 2000,
        });

        gsap.registerPlugin(TextPlugin);
        let tl = gsap.timeline({
        repeat: -1, 
        yoyo: true,
        repeatDelay: 2
        });

        tl.to('.tulis', {
        duration: 2,
        delay: 1.5,
        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        });

    </script>
  </body>
</html>