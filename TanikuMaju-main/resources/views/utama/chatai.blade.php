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
    <!-- ICon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    <!-- FOnt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- JS Typing -->
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/chatai.css') }}">
@endsection

@section('main')
    <!-- Container -->
    <div class="container-fluid konten">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                    Optimalkan <br>
                    Pertanian Anda <br>
                    dengan Bantuan AI
                </h1>
                <h3 style="color: #869DAD;" class="mt-4" data-aos="fade-in" data-aos-duration="2500"
                    data-aos-delay="550">Akses chat AI Sekarang Juga - Mulai Chat!</h3>
            </div>
        </div>
        
        <!-- Section for Logos -->
        <div class="logo-section py-4" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="1000">
            <div class="container">
                <div class="marquee">
                    <div class="row justify-content-center align-items-center marquee-content">
                        <div class="col text-center">
                            <img src="{{ asset('images/humana.png') }}" alt="Humana" class="logo-img">
                        </div>
                        <div class="col text-center">
                            <img src="{{ asset('images/anthem.png') }}" alt="Anthem" class="logo-img">
                        </div>
                        <div class="col text-center">
                            <img src="{{ asset('images/healthcare.png') }}" alt="UnitedHealthcare" class="logo-img">
                        </div>
                        <div class="col text-center">
                            <img src="{{ asset('images/aetna.png') }}" alt="Aetna" class="logo-img">
                        </div>
                        <div class="col text-center">
                            <img src="{{ asset('images/cigna.png') }}" alt="Cigna" class="logo-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section AI -->
        <div class="section1">
            <div class="chat-input-container" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                <!-- Input Field -->
                <input type="text" class="chat-input" placeholder="Masukan Pertanyaan Anda">

                <!-- Send Button -->
                <div class="send-button">
                    <iconify-icon icon="tabler:send" style="color: white" height="22"></iconify-icon>
                </div>

                <!-- Attach Button -->
                <div class="attach-button">
                    <iconify-icon icon="icon-park-outline:link" style="color: white" height="25"></iconify-icon>
                </div>
            </div>
            <div class="answer-container" data-aos="fade-up" data-aos-duration="900" data-aos-delay="950">
                <!-- Icon Container -->
                <div class="icon-container">
                    <span class="iconify" data-icon="mdi:sparkles"></span>
                </div>

                <!-- Answer Box -->
                <div class="answer-box">
                    <p id="multipleStrings"></p>
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

    <!-- Typing -->
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    new TypeIt("#multipleStrings", {
                        strings: ["Halo Pak Tani! SiTani di sini.",
                            "Butuh solusi untuk ladang pertanian Anda? Silakan tanyakan di sini!"
                        ],
                        speed: 50,
                        waitUntilVisible: true,
                    }).go();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(document.querySelector('.answer-box'));
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
    <!-- Iconify -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
@endsection