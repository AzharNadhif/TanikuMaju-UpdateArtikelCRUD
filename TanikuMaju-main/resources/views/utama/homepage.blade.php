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
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('main')
  <div class="container-fluid">
    <!-- Header -->
    <div class="header">
      <div class="header-content">
        <h1 class="fw-bold" style="color: #F7C35F; position: relative;" data-aos="fade-right" data-aos-duration="2000">
          Bersama Petan<span class="relative-i" id="spanImage">i
            <img src="{{ asset('images/image5.svg') }}" class="image-above-i" data-aos="fade-up" data-aos-duration="1500">
          </span>,
        </h1>
        <h1 class="fw-bold" data-aos="fade-right" data-aos-duration="2000">Membangun Pertanian yang Lestari</h1>
        <p data-aos="fade-right" data-aos-duration="2000">Dengan teknologi pertanian modern, kami mendukung petani dalam
          mengelola lahan secara efisien, meningkatkan hasil panen, dan menjaga keberlanjutan.</p>
        <a href="#cardHeader" class="btn btn-warning pelajari" data-aos="fade-in" data-aos-duration="1500"
          data-aos-delay="1500">Pelajari Disini</a>
      </div>
    </div>

    <!-- Cards Section-->
    <div class="container bottom-card" id="cardHeader" data-aos="fade-up" data-aos-duration="1500">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card p-3" data-aos="zoom-in" data-aos-duration="1000">
            <div class="icon">
              <img src="{{ asset('images/pantautani.svg') }}" alt="">
            </div>
            <h5>Pantau Tani</h5>
            <p>Pantau kesehatan tanaman Anda dengan sensor IoT untuk mengukur kelembaban tanah, suhu, dan kondisi
              tanaman secara real-time.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3" data-aos="zoom-in" data-aos-duration="2000">
            <div class="icon">
              <img src="{{ asset('images/carbon_rain.svg') }}" alt="">
            </div>
            <h5>Cuaca</h5>
            <p>Dapatkan prediksi cuaca real-time dan laporan prakiraan cuaca jangka panjang untuk mengoptimalkan jadwal
              pertanian Anda.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3" data-aos="zoom-in" data-aos-duration="3000">
            <div class="icon">
              <img src="{{ asset('images/chat.svg') }}" alt="">
            </div>
            <h5>Chat AI</h5>
            <p>Dapatkan jawaban instan dari Chat AI kami terkait pertanian, dari cara menangani hama hingga saran
              tentang irigasi yang lebih efisien.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Artikel -->
    <div class="section1">
      <!-- Swiper -->
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach ($artikels as $artikel)
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
              <div class="card custom-card">
                <img src="{{ asset('images/artikel/' . $artikel->gambar) }}" class="card-img-top zoom" alt="Artikel Image">
                <div class="card-body">
                  <h5 class="card-title">{{ $artikel->judul }}</h5>
                  <p class="card-text">
                    {!! Str::limit($artikel->isi, 100, '...') !!}
                </p>                
                </div>
                <div class="card-footer ms-auto">
                  <a href="{{ url('/artikel/detail/' . $artikel->id) }}" class="btn">
                    <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="section2">
      <div class="row justify-content-center align-items-center mx-0"
        style="background-image: url('/images/bgpantau.png');">
        <div class="col-md-8 flex-column">
          <div class="contentdua">
            <div class="isi" data-aos="fade-right" data-aos-duration="1500">
              <h1 class="fw-bold"  >Pantau Lahan Pertanian</h1>
            <br>
            <p>
              Dapatkan akses ke data lahan pertanian terkini yang dirancang untuk meningkatkan hasil panen Anda. Pantau
              kelembaban tanah, prediksi cuaca, dan deteksi hama dalam satu platform. Jadikan setiap keputusan pertanian
              lebih tepat dan efektif dengan teknologi canggih kami.
            </p>
            </div>
            <br>
            <a href="monitoring.html" class="btn btn-warning fw-bold" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">Selanjutnya</a>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-flex align-items-center flex-column" data-aos="fade-left"
          data-aos-duration="1500" data-aos-delay="200">
          <img src="{{ asset('images/pantau.jpg') }}" class="w-75 d-block"
            style="transform: scale(1.41); object-fit: cover; object-position: center;">
        </div>
      </div>
    </div>

    <!-- Section 3 -->
    <div class="section3 justify-content-center" id="section3">
      <div class="weather-card" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="time-section">
          <h1 class="fw-bold" id="clock"></h1>
          <div class="date-location">
            <h5 class="fw-bold">Tuesday, 23 December</h5>
            <h5><i class="fas fa-map-marker-alt"></i> Gonin Gora, Kad</h5>
          </div>
        </div>
        <div class="temperature-section">
          <h1 class="fw-bold">27&deg;C</h1>
          <!-- <i class="fas fa-cloud-sun"></i> -->
          <h5>Berawan</h5>
          <h5>Terasa Seperti 26</h5>
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

  <!-- Script.JS -->

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

  <!-- Script Clock -->
  <script>
    function randomTime() {
      const randomHour = Math.floor(Math.random() * 24); 
      const randomMinute = Math.floor(Math.random() * 60); 

      const formattedHour = randomHour < 10 ? '0' + randomHour : randomHour;
      const formattedMinute = randomMinute < 10 ? '0' + randomMinute : randomMinute;

      return `${formattedHour}:${formattedMinute}`;
    }

    function getCurrentTime() {
      const now = new Date();
      let hours = now.getHours();
      let minutes = now.getMinutes();
      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      return `${hours}:${minutes}`;
    }

    function startRandomAnimation() {
      const clock = document.getElementById("clock");
      let randomInterval = setInterval(() => {
        clock.innerHTML = randomTime();
      }, 100); 
      setTimeout(() => {
        clearInterval(randomInterval); 
        clock.innerHTML = getCurrentTime(); 
        startRealClock(); 
      }, 2000); 
    }

    function startRealClock() {
      const clock = document.getElementById("clock");

      function updateClock() {
        clock.innerHTML = getCurrentTime();
      }
      setInterval(updateClock, 60000);
    }

    function observeSection() {
      const section3 = document.getElementById("section3");
      const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            startRandomAnimation();
            observer.unobserve(section3); 
          }
        });
      };
      const observerOptions = {
        root: null, 
        threshold: 0.5 
      };
      const observer = new IntersectionObserver(observerCallback, observerOptions);
      observer.observe(section3); 
    }
    document.addEventListener("DOMContentLoaded", observeSection);
  </script>

  <!-- Initialize Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
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
