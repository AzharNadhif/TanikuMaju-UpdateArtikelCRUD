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
  <!-- Sweeper Js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- ICon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- FOnt -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/detailArtikel.css') }}">
@endsection

@section('main')

  <!-- Main Content Section -->
  <section class="main-content">
    <img src="{{ asset('images/artikel/' . $artikel->gambar) }}" alt="Gambar {{ $artikel->judul }}" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200" style="height: 700px;">
    <h1 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">{{ $artikel->judul }}</h1>
    <time datetime="{{ $artikel->tanggal }}">{{ \Carbon\Carbon::parse($artikel->tanggal)->format('d M Y') }}</time>

    <!-- Menampilkan isi artikel -->
    {!! $artikel->isi !!}
  </section>

  <section class="related-articles">
    <h3>Artikel Lainnya</h3>
      <div class="article-card-container" data-aos="fade-up" data-aos-duration="1000">
          @foreach ($relatedArticles as $related)
              <div class="article-card">
                  <div class="card-body">
                      <img src="{{ asset('images/artikel/' . $related->gambar) }}" class="img zoom" alt="{{ $related->judul }}">
                      <h4>{{ $related->judul }}</h4>
                      <p>{{ Str::limit(strip_tags($related->isi), 100, '...') }}</p>
                      <a href="{{ url('/artikel/detail/' . $related->id) }}" class="arrow-button">
                          <i class="fas fa-arrow-right"></i>
                      </a>
                  </div>
              </div>
          @endforeach
      </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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
  <script>
    AOS.init();
    var swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: { el: '.swiper-pagination', clickable: true }
    });
  </script>
@endsection

</html>
