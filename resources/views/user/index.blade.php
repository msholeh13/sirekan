<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SIREKAN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="icon" href="{{asset('assets/img/user/logoUser.png')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link href="{{ asset('assets/vendors/user/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/user/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/user/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/user/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/user/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/user/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .lazy-image {
    background-color: #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    aspect-ratio: 4/3; /* Sesuaikan dengan rasio gambar Anda */
    object-fit: cover;
    transition: opacity 0.3s;
  }
  .lazy-image.loaded {
      opacity: 1;
  }
  .btn:disabled {
    cursor: not-allowed;
    opacity: 0.6;
  }
  #resetBtn {
    transition: opacity 0.3s ease;
  }

  #recommendationForm .btn {
      flex: 1; /* Membuat kedua tombol lebar sama */
      white-space: nowrap; /* Teks tidak wrap */
  }

  /* Responsif untuk mobile */
  @media (max-width: 768px) {
      #recommendationForm .d-flex {
          flex-direction: column;
      }
      #resetBtn, #recommendationForm button[type="submit"] {
          width: 100%;
          margin-bottom: 5px;
      }
}
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/user/logoUser.png')}}" alt="">
        <h1 class="sitename">SIREKAN</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#data">Data</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Cari Makanan Sehat<br>Dan Lezat Anda</h1>
            <p data-aos="fade-up" data-aos-delay="100">Selamat Datang di sistem rekomendasi makanan khas Indonesia</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ url('#data') }}" class="btn-get-started">Cari Sekarang</a>
              <a href="https://youtu.be/aKtb7Y3qOck?si=TwX8FAWvOBvnRYgo" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{asset('assets/img/user/home.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami<br></h2>
        <p><span>Ketahui Lebih</span> <span class="description-title">Tentang Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('assets/img/user/about1.jpg')}}" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Dari Sabang Sampai Merauke</h3>
              <p>Beragam Cita Rasa, Satu Jiwa</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                SIREKAN adalah sebuah website sistem rekomendasi makanan yang menyediakan data dari berbagai jenis makanan yang berasal dari Indonesia. Disini anda bisa : 
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Melihat berbagai makanan yang diketahui maupun yang belum dari Indonesia</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Mencari makanan yang sesuai dari data yang disediakan</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Menghargai banyaknya makanan minuman yang berasal dari Indonesia</span></li>
              </ul>
              <p>
                Silahkan belajar sebanyak mungkin tentang budaya di Indonesia khususnya makanan yang begitu banyaknya tersebar di seluruh wilayah nusantara.
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('assets/img/user/about2.jpg')}}" class="img-fluid" alt="">
                <a href="https://youtu.be/cbD_yqfYx9g?si=uWtc7a0R_GO_lTKY" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="{{asset('assets/img/user/stats.jpg')}}" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Data</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Data</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    
    
    
    <!-- Menu Section -->
    <section id="data" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Data Makanan</h2>
        <p><span>Lihat Data</span> <span class="description-title">Makanan yang Tersedia</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="mb-3 d-flex justify-content-end">
          <div class="col-12 col-md-4">
            <div class="input-group">
              <button class="btn btn-danger btnData" id="searchBtn">Cari</button>
              <input type="text" id="searchInput" class="form-control" placeholder="Cari makanan...">
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <form id="recommendationForm" action="" method="POST" class="col-12 col-lg-2 border rounded p-2">
            <p class="fs-5 fs-md-4 fw-bolder mb-3">Rekomendasi</p>
            <div class="mb-3">
              <label for="calories" class="form-label">Kalori <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah kalori (dalam kal) per 100 gram makanan/minuman"></i></label>
              <input type="number" min="0" step="1" class="form-control" id="calories" placeholder="0 gr/100gr">
                <div class="invalid-feedback">Harap masukkan nilai kalori yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="proteins" class="form-label">Protein <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=" jumlah protein (dalam gram) per 100 gram makanan/minuman"></i></label>
              <input type="number" min="0" step="1" class="form-control" id="proteins" placeholder="0 gr/100gr">
                <div class="invalid-feedback">Harap masukkan nilai protein yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="fat" class="form-label">Lemak <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah lemak (dalam gram) per 100 gram makanan/minuman"></i></label>
              <input type="number" min="0" step="1" class="form-control" id="fat" placeholder="0 gr/100gr">
                <div class="invalid-feedback">Harap masukkan nilai lemak yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="carbohydrate" class="form-label">Karbohidrat <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah karbohidrat (dalam gram) per 100 gram makanan/minuman"></i></label>
              <input type="number" min="0" step="1" class="form-control" id="carbohydrate" placeholder="0 gr/100gr">
                <div class="invalid-feedback">Harap masukkan nilai karbohidrat yang valid: number, min 0</div>
            </div>
            <div class="d-flex justify-content-end" id="buttonRecommendation">
              <button type="button" id="resetBtn" class="btn btn-secondary me-2" style="display: none">Reset</button>
              <button type="submit" class="btn btn-danger me-2 btnData">Cari</button>
            </div>
          </form>
          <div class="col-12 col-lg-10">
            <div id="foodGrid" class="row g-3">
              <!-- card akan dimasukkan disini -->
            </div>
             <!-- Trigger div untuk lazy load -->
        <div id="loadMoreBtn" class="text-center mt-3 load-more rounded">Loading more...</div>
          </div>
        </div>
       
      </div>
    </section><!-- /Menu Section -->
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p><span>Butuh Bantuan?</span> <span class="description-title">Hubungi Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height:400px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253035.74013013058!2d110.48894728014905!3d-7.7170747074857164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a416389cafa5d%3A0x3027a76e352bad0!2sKlaten%2C%20Kabupaten%20Klaten%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1753706365764!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

{{--     
        <form action="" method="get" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" >
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" >
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" >
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form --> --}}

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>Klaten Utara</p>
            <p>Klaten, Jawa Tengah</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Telepon:</strong> <span>+62 857 2990 0000</span><br>
              <strong>Email:</strong> <span>testing@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Sen-Sab:</strong> <span>Setiap Saat</span><br>
              <strong>Minggu</strong>: <span>Healing</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bang M</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Didesain oleh <a href="https://bootstrapmade.com/">BootstrapMade</a> Didistribusikan oleh <a href="https://themewagon.com">ThemeWagon</a> Diedit oleh <a href="https://github.com/msholeh13">Bang M</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

{{-- modal --}}
  <div class="modal fade" id="foodModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <p id="foodModalLabel" class="modal-title fs-3 fw-bold"></p>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body" id="foodModalBody">
          <!-- detail disini -->
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendors/user/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/user/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendors/user/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/user/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendors/user/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/user/main.js') }}"></script>
  <script src="{{ asset('assets/js/user/myScript.js') }}"></script>

  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  </script>

</body>

</html>