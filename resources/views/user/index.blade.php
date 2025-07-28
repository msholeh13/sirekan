<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SIREKAN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
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
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">SIREKAN</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#data">Data</a></li>
          <li><a href="#contact">Contact</a></li>
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
              <a href="{{ url('#menu') }}" class="btn-get-started">Cari Sekarang</a>
              <a href="https://youtu.be/aKtb7Y3qOck?si=TwX8FAWvOBvnRYgo" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
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
            <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Book a Table</h3>
              <p>+1 5589 55488 55</p>
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
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1436" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Data</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1436" data-purecounter-duration="1" class="purecounter"></span>
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
              <button class="btn btn-primary" id="searchBtn">Cari</button>
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
              <label for="calories" class="form-label">Kalori</label>
              <input type="number" min="0" step="1" class="form-control" id="calories" placeholder="0" value="0">
                <div class="invalid-feedback">Harap masukkan nilai kalori yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="proteins" class="form-label">Protein</label>
              <input type="number" min="0" step="1" class="form-control" id="proteins" placeholder="0" value="0">
                <div class="invalid-feedback">Harap masukkan nilai protein yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="fat" class="form-label">Lemak</label>
              <input type="number" min="0" step="1" class="form-control" id="fat" placeholder="0" value="0">
                <div class="invalid-feedback">Harap masukkan nilai lemak yang valid: number, min 0</div>
            </div>
            <div class="mb-3">
              <label for="carbohydrate" class="form-label">Karbohidrat</label>
              <input type="number" min="0" step="1" class="form-control" id="carbohydrate" placeholder="0" value="0">
                <div class="invalid-feedback">Harap masukkan nilai karbohidrat yang valid: number, min 0</div>
            </div>
            <div class="d-flex justify-content-end" id="buttonRecommendation">
              <button type="button" id="resetBtn" class="btn btn-secondary me-2" style="display: none">Reset</button>
              <button type="submit" class="btn btn-primary me-2">Cari</button>
            </div>
          </form>
          <div class="col-12 col-lg-10">
            <div id="foodGrid" class="row g-3">
              <!-- card akan dimasukkan disini -->
            </div>
          </div>
        </div>
        <!-- Trigger div untuk lazy load -->
        <div id="loadMoreBtn" class="text-center mt-3">Loading more...</div>
      </div>
    </section><!-- /Menu Section -->
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

    
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
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
          <h5 id="foodModalLabel" class="modal-title"></h5>
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



</body>

</html>