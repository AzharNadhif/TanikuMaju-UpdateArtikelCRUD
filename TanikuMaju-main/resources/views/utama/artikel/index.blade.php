@extends('utama.layouts.main')
@section('head')
  <meta charset="UTF-8">
  <title>TanikuMaju</title>
  <!-- Website Icon -->
  <link rel="Website Icon"type="png" href="{{ asset('images/logotani.png') }}">
  <!-- AOS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Swiper Js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/artikel.css') }}">
@endsection

@section('main')
  <div class="container-fluid p-0">
    <!-- Header -->
    <div class="header">
      <div class="header-content">
        <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Baca Artikel <br> Terbaru
          Kami</h1>
      </div>
    </div>

    <!-- Article Section -->
    <div class="container my-5">
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <h2>Artikel TanikuMaju</h2>
        <!-- Search Bar -->
        <div class="input-group mb-3 justify-content-center" data-aos="fade-up" data-aos-duration="2000"
          data-aos-delay="200">
          <input type="text" class="form-control" placeholder="Masukkan judul artikel" aria-label="Search">
          <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>

    <!-- Swiper Section -->
    <div class="container my-5">
      <div class="row">
          <!-- SWiper -->
          <div class="swiper" data-aos="fade-up" data-aos-duration="1000">
              <div class="swiper-wrapper">
                  @foreach ($artikels->chunk(6) as $chunk)
                      <div class="swiper-slide">
                          <div class="row">
                              @foreach ($chunk as $artikel)
                                  <div class="col-md-4 mb-4">
                                      <a href="{{ route('artikel.detail', $artikel->id) }}">
                                          <div class="card">
                                              <img src="{{ asset('images/artikel/' . $artikel->gambar) }}" class="card-img-top zoom" alt="Gambar Artikel">
                                              <div class="card-body">
                                                  <p class="fw-bold" style="color: #69340E;">{{ \Carbon\Carbon::parse($artikel->tanggal)->format('d M Y') }}</p>
                                                  <h5 class="card-title">{{ $artikel->judul }}</h5>
                                                  <p class="card-text">{{ Str::limit(strip_tags($artikel->isi), 100, '...') }}</p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  @endforeach
              </div>
              <div class="pembatas"></div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
          </div>
      </div>
  </div>
  

  <!-- Section 4 CTA -->
  <div class="section4 mx-0">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-md-12 text-center">
            <h2 class="fw-bold">Bicarakan Kebutuhan Pertanian <br>
              Anda dengan AI
            </h2>
            <br>
            <a href="chatai.html" class="btn btn-lg btn-warning fw-bold">Mulai Chat</a>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Script -->
<!-- JS Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
  });
</script>

<!-- JS Scroll -->
<script>
  window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
  integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  AOS.init();
</script>
@endsection