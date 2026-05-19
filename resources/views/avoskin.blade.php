<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>5026241012 - Tugas Pra ETS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Avoskin</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#loyalty">Loyalty</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Inspired by Nature, <br>Created for Nurture</h1>
            <p>#LoveAvoskinLoveEarth</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=9AutGRVqObE" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/ecommerce/logoavoskin.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/ecommerce/shopeelogo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/ecommerce/tokpedlogo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/ecommerce/bliblilogo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/ecommerce/logozalora.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/ecommerce/lazadalogo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/ecommerce/socilogo.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Through the #LoveAvoskinLoveEarth campaign, we have realized various massive efforts in supporting sustainable movements. Therefore, #MulaiDariMejaRias is here to invite Sahabat Avo to be able to contribute to sustainability starting from themselves.
              <br><br><b>Our Principles : </b>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Planet : Eco-conscious products and packaging.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>People : Empowering communities inclusively.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Profit : Fair trade for sustainable growth.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Some examples that we echoes such as Avoskin who tirelessly educates Sahabat Avo to use skincare that is personalized according to the needs of each skin so that it creates a "mindful skincare use", avoids the use of microplastics in our products, and facilitates Sahabat Avo to return empty packaging through a digital takeback program. </p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span><strong>Providing Quality and Innovative Products with Strong Sustainability Value </strong></h3>

            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Planet</h3>
                <div class="faq-content">
                  <p>We create products with nature-conscious ingredients, reusable packaging, beauty empties takeback programs with Waste4Change, and collaborations with environmental conservation organizations such as BOS Foundation and Lindungi Hutan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> People</h3>
                <div class="faq-content">
                  <p>We empower women and local communities through RUBI, collaborations with Torajamelo, and partnerships with organizations like PUKA to support inclusive creative education.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Profit</h3>
                <div class="faq-content">
                  <p>We apply fair trade practices with partners across the supply chain to offer fair pricing and sustain our long-term sustainability efforts.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/gambar1.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/gambar2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Rooted in Nature, Refined by Beauty</h3>
            <p class="fst-italic">
              Avoskin presents skincare with a calm, natural, and elegant identity. Through earthy tones, soft visuals, and mindful product presentation, the brand creates a beauty experience that feels warm, trustworthy, and close to nature.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>Natural Beauty</span> <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Sustainable Care</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Clean Branding</span> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Product Trust</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="loyalty" class="loyalty section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Loyalty</h2>
        <p>How it works?</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Join</a></h4>
              <p>Sign up / daftarkan diri untuk menjadi Avoskin Loyal Customer Member</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Earn</a></h4>
              <p>Kumpulkan poin di setiap pembelian produk Avoskin di website resmi juga tambahan poin dari setiap program spesial</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Reedem</a></h4>
              <p>Tukarkan poin yang terkumpul di halaman check out dengan hadiah menarik yang kamu inginkan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Upgrade</a></h4>
              <p>Naik ke level member yang lebih tinggi dan dapatkan keuntungan yang lebih banyak</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Work Process Section -->
    <section id="work-process" class="work-process section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Extra Benefits You'll Get!</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="steps-item">
              <div class="steps-image">
                <img src="assets/img/benefit1.png" alt="Step 1" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">01</div>
                <h3>Membership Discount</h3>
                <p>Langsung nikmati potongan harga sesuai dengan loyalti membermu</p>
                <div class="steps-features">

                </div>
              </div>
            </div><!-- End Steps Item -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="steps-item">
              <div class="steps-image">
                <img src="assets/img/benefit2.png" alt="Step 2" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">02</div>
                <h3>Birthday Gift</h3>
                <p>Dapatkan hadiah dan promo spesial ulang tahun untuk para Beauty Enthusiast dan Beauty Expressor</p>

              </div>
            </div><!-- End Steps Item -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="steps-item">
              <div class="steps-image">
                <img src="assets/img/benefit3.png" alt="Step 3" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">03</div>
                <h3>Extra Points</h3>
                <p>Poin tambahan dari misi pengembalian kemasan kosong, review juga kode referal yang terpakai</p>
                <div class="steps-features">

                </div>
              </div>
            </div><!-- End Steps Item -->
          </div>

        </div>

      </div>

    </section><!-- /Work Process Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/bg/bgavoskin.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Discover Your Natural Glow</h3>
            <p>Experience mindful skincare inspired by nature, crafted to support healthy skin while caring for the planet.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Explore Products</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="product" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Products</h2>
        <p>Explore skincare products inspired by nature, designed to care for your skin while supporting sustainable beauty.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Cleanser</li>
            <li data-filter=".filter-product">Moisture</li>
            <li data-filter=".filter-branding">Make Up</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/product/facecleanser.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sublime Facial Wash</h4>
                <p>Low pH Cleanser</p>
                <a href="assets/img/product/facecleanser.jpg" title="Gentle Facial Wash" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Gentle-Facial-Wash-Avoskin-Natural-Sublime-Facial-Cleanser-100ml-i.154494405.3765113010?extraParams=%7B%22display_model_id%22%3A61967484518%2C%22model_selection_logic%22%3A3%7D" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/product/moisturizer.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Multi Herbs Hydro Burst Moisturizer</h4>
                <p>Watery Gel Moisturizer</p>
                <a href="assets/img/product/moisturizer.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Avoskin-YSB-Multi-Herbs-Hydro-Burst-Moisturizer-Size-New-15ml-i.224957239.26035311596?extraParams=%7B%22display_model_id%22%3A188479890622%2C%22model_selection_logic%22%3A3%7D&sp_atk=bce2d9dd-d6e0-4f02-b74a-5363f7bf9ed1&xptdk=bce2d9dd-d6e0-4f02-b74a-5363f7bf9ed1" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/product/cushion.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/product/cushion.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/-NEW-ARRIVAL-YSB-Hybrid-Elixir-Skin-Radiant-Perfect-Cushion-i.154494405.57007668021?extraParams=%7B%22display_model_id%22%3A282478133923%2C%22model_selection_logic%22%3A3%7D&sp_atk=92d0c9c6-fe7f-4297-bfb9-9c0b0d465193&xptdk=92d0c9c6-fe7f-4297-bfb9-9c0b0d465193" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/product/bodycleanser.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>My Serendipity Deep Body Cleanser</h4>
                <p>Untuk kulit berjerawat</p>
                <a href="assets/img/product/bodycleanser.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Deep-Body-Cleanser-Avoskin-My-Serendipity-No.0-200ml-Kulit-Berjerawat-i.154494405.23207586040?extraParams=%7B%22display_model_id%22%3A39194671999%2C%22model_selection_logic%22%3A3%7D" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/product/serum.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Your Skin Bae Serum</h4>
                <p>Serum Mencerahkan Wajah</p>
                <a href="assets/img/product/serum.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Serum-Avoskin-Your-Skin-Bae-Vitamin-C-30ml-Kulit-Tampak-Lebih-Cerah-Serum-Mencerahkan-Wajah-i.154494405.8518514302?extraParams=%7B%22display_model_id%22%3A53830759322%2C%22model_selection_logic%22%3A3%7D" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/product/lipbalm.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>YSB Hybrid Elixir Super Slick</h4>
                <p>Tinted Melting Balm SPF 20</p>
                <a href="assets/img/product/lipbalm.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/YSB-Hybrid-Elixir-Super-Slick-Tinted-Melting-Balm-SPF-20-Rana-(3-gr)-i.154494405.26357125661?extraParams=%7B%22display_model_id%22%3A109228672232%2C%22model_selection_logic%22%3A3%7D" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/product/facecleanser2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Your Skin Bae Kojic Acid Cleanser</h4>
                <p>My Serendipity No.0 200ml-Kulit Berjerawat</p>
                <a href="assets/img/product/facecleanser2.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Gentle-Facial-Wash-Avoskin-Natural-Sublime-Facial-Cleanser-100ml-i.154494405.3765113010?extraParams=%7B%22display_model_id%22%3A61967484518%2C%22model_selection_logic%22%3A3%7D" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/product/saviorbalm.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Savior Balm</h4>
                <p>YSB Acne & Pores Savior Balm Stick</p>
                <a href="assets/img/pproduct/saviorbalm.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Avoskin-YSB-Acne-Pores-Savior-Balm-Stick-(8.5-g)-i.270965687.25919587942?extraParams=%7B%22display_model_id%22%3A410634102884%2C%22model_selection_logic%22%3A3%7D&sp_atk=3f1c3de7-af33-48ae-bade-644fbb854fca&xptdk=3f1c3de7-af33-48ae-bade-644fbb854fca" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/product/makeup3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Avoskin Your Skin Bae Hybrid Elixir Lash & Brow Optimizer</h4>
                <p>Serum Bulu Mata dan Alis</p>
                <a href="assets/img/product/makeup3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://shopee.co.id/Avoskin-Your-Skin-Bae-Hybrid-Elixir-Lash-Brow-Optimizer-Serum-5-gr-Bulu-Mata-Alis-i.222159263.40680560230?extraParams=%7B%22display_model_id%22%3A420867747319%2C%22model_selection_logic%22%3A3%7D&sp_atk=d281c5b0-31ea-4750-a3ac-c9886a1532cc&xptdk=d281c5b0-31ea-4750-a3ac-c9886a1532cc" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>AVO Team</h2>
        <p>We may run, walk, stumble, drive, or fly, but let us never lose sight of the reason for our journey. <br>This journey teaches us about togetherness and new experiences.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/ceo.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anugrah Pakerti</h4>
                <span>Chief Executive Officer</span>
                <p>We pursue the highest of corporate responsibility to benefit our stakeholders and ensure our long-term sustainability.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
               <div class="pic"><img src="assets/img/team/cio.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aris Nurul Huda</h4>
                <span>Chief Information Officer</span>
                <p>We are committed to providing the best services and solutions, as well as continuously educating Indonesian women to look beautiful through safe & natural products.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/coo.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ahmad Ramadhan</h4>
                <span>Chief Operating Officer</span>
                <p>Feature & service innovation is the main focus of the team that is the spearhead of the company. Apart from being aimed to consumers, we are committed to developing features and services for business partners.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Have questions about Avoskin products, orders, or collaborations? Reach out to us and let’s connect.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Avoskin Sanctuary
                    <br>Taman Anggrek, Mall Jl. Letjen S. Parman lantai Dasar, RT.12/RW.1, Jakarta</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 878 - 1010 - 2014</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>cs@avoskin.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps?q=-6.1791054,106.7916775&hl=en&z=17&output=embed" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">AVOSKIN</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Taman Anggrek Mall</p>
            <p>Jakarta, Indonesia</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 878 - 1010 - 2014</span></p>
            <p><strong>Email:</strong> <span>cs@avoskin.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Discover skincare tips, product updates, and mindful beauty inspiration from Avoskin.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
