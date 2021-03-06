<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $site_title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('theme/fonts/icomoon/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/fonts/flaticon/font/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/aos.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/style.css'); ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="<?= base_url(''); ?>" class="text-uppercase">LKTS</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#teams-section" class="nav-link">Teams</a></li>
                <li><a href="#gallery-section" class="nav-link">Projects</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#articles-section" class="nav-link">Articles</a></li>
                <li class="cta"><a href="#contact-section" class="nav-link"><span class="border bg-primary rounded text-white border-primary">Contact</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>

    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">
            <div class="owl-carousel slide-one-item-alt-text">
              <!-- <div class="slide-text">
                <h1>LKTS BOYOLALI</h1>
                <p class="mb-5">Kasus AKI/AKB masih tinggi di Kabupaten Boyolali dengan jumlah 12 kasus pada tahun 2019, data ini diperoleh dari Dinkes Kab. Boyolali.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div> -->
              <div class="slide-text">
                <h1><?= $caption_1; ?></h1>
                <p class="mb-5"><?= $descr_1; ?></p>
                <p><a href="#about-section" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1><?= $caption_2; ?></h1>
                <p class="mb-5"><?= $descr_2; ?></p>
                <p><a href="#services-section" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1><?= $caption_3; ?></h1>
                <p class="mb-5"><?= $descr_3; ?></p>
                <p><a href="#teams-section" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">       
            <div class="owl-carousel slide-one-item-alt">
              <img src="<?= base_url('theme/images/') . $slide_1; ?>" alt="Image" class="img-fluid">
              <img src="<?= base_url('theme/images/') . $slide_2; ?>" alt="Image" class="img-fluid">
              <img src="<?= base_url('theme/images/') . $slide_3; ?>" alt="Image" class="img-fluid">
              
            </div>
            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-1" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5"  data-aos="fade-up">
            <div class="mb-5">
              <h2 class="section-title"><?= $about_subtitle; ?></h2>
              <p><?= $about_description; ?></p>
              <!-- <p class="mb-5">LKTS mempunyai mandate memperkuat posisi tawar masyarakat miskin dan marginal serta mendorong kelestarian lingkungan melalui pemberdayaan masyarakat dan advokasi kebijakan. Upaya-upaya yang dilakukan LKTS bertujuan mendorong terwujudnya pranata sosial yang adil dan demokratis yang mampu menjamin terpenuhinya hak-hak masyarakat dan lingkungan yang berkelanjutan.</p> -->
              <p class="mb-0">Visit <a href="<?= $about_link; ?>" class="text-danger">LKTS Sosmed</a></p>
            </div>          
          </div>
          <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
            <div class="image-absolute-box">
              <div class="box">
                <div class="icon-wrap"><span class="flaticon-vector"></span></div>
                <h3>VISI</h3>
                <ul class="ul-check list-unstyled success">
                  <li>Kehidupan yang demokratis, adil, makmur, dan berkelanjutan.</li>
                </ul>
                <h3>MISI</h3>
                <ul class="ul-check list-unstyled success">
                  <li>Mendorong terwujudnya pranata sosial yang adil dan demokratis yang mampu menjamin terpenuhinya hak-hak masyarakat dan lingkungan yang berkelanjutan.</li>
                </ul>
                <!-- <p>Lembaga Kajian untuk Transformasi Sosial (Institute for Social Transformasion Studies).</p> -->
                
              </div>
              <img src="<?= base_url('theme/images/') . $about_image; ?>" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="services-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title"><?= $service_title; ?></h2>
            <p><?= $service_subtitle; ?></p>
          </div>
        </div>
      </div>
        
      <div class="owl-carousel nonloop-block-14">
        
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-reload"></span></span>
            <h3><?= $service_service1; ?></h3>
            <p><?= $service_description1; ?></p>
          </div>
        </div>
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-download"></span></span>
            <h3><?= $service_service2; ?></h3>
            <p><?= $service_description2; ?></p>
          </div>
        </div>
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-monitor"></span></span>
            <h3><?= $service_service3; ?></h3>
            <p><?= $service_description3; ?></p>
          </div>
        </div>
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-chat"></span></span>
            <h3><?= $service_service4; ?></h3>
            <p><?= $service_description4; ?></p>
          </div>
        </div>
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-glasses"></span></span>
            <h3><?= $service_service5; ?></h3>
            <p><?= $service_description5; ?></p>
          </div>
        </div>
        <div class="service">
          <div>
            <span class="custom-icon-wrap"><span class="flaticon-vector"></span></span>
            <h3><?= $service_service6; ?></h3>
            <p><?= $service_description6; ?></p>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section testimonial-wrap custom-owl-carousel" id="teams-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
          <div class="col-lg-6 mb-5 text-center">
            <h2 class="section-title w-100 mx-auto">LKTS Team</h2>
            <p>Pimpinan maupun kepengurusan organisasi</p>
          </div>
        </div>
        <div class="row align-items-center"  data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-5 mr-auto">
            <div class="owl-carousel slide-one-item-alt-text">
            <?php foreach ($testimonial->result() as $test) : ?>
              <div class="slide-text">
                <blockquote>
                  <p><span></span><?php echo $test->testimonial_content; ?><span></span></p>
                  <p class="author">&mdash;  <?php echo $test->testimonial_name; ?></p>
                </blockquote>
              </div>
              <?php endforeach; ?>
              <!-- <div class="slide-text">
                <blockquote>
                  <p><span></span>Staff<span></span></p>
                  <p class="author">&mdash;  Fafa</p>
                </blockquote>
              </div>
              <div class="slide-text">
                <blockquote>
                  <p><span></span>Staff<span></span></p>
                  <p class="author">&mdash;  Jaja</p>
                </blockquote>
              </div>
              <div class="slide-text">
                <blockquote>
                  <p><span></span>Staff<span></span></p>
                  <p class="author">&mdash;  Wawa</p>
                </blockquote>
              </div> -->

            </div>
          </div>

          <div class="col-lg-4 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="owl-carousel slide-one-item-alt">
              <?php foreach ($testimonial->result() as $test) : ?>
                <img src="<?= base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
              <?php endforeach; ?>
            </div>
            
            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>

<!-- sini buat gallery -->
    <div class="site-section section-2 bg-light" id="gallery-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2">
            <h2 class="section-title"><?= $portfolio_title; ?></h2>
            <p><?= $portfolio_subtitle; ?></p>
          </div>
        </div>
    </div>
        
      <div class="owl-carousel nonloop-block-13">

          <a class="work-thumb" href="<?= base_url('theme/images/') . $portfolio_image1; ?>" data-fancybox="gallery">
            <div class="work-text">
              <h3><?= $portfolio_project1; ?></h3>
              <span class="category"><?= $portfolio_desc1; ?></span>
            </div>
            <img src="<?= base_url('theme/images/') . $portfolio_image1; ?>" alt="Image" class="img-fluid">
          </a> 
          
          <a class="work-thumb" href="<?= base_url('theme/images/') . $portfolio_image2; ?>" data-fancybox="gallery">
            <div class="work-text">
              <h3><?= $portfolio_project2; ?></h3>
              <span class="category"><?= $portfolio_desc2; ?></span>
            </div>
            <img src="<?= base_url('theme/images/') . $portfolio_image2; ?>" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="<?= base_url('theme/images/') . $portfolio_image3; ?>" data-fancybox="gallery">
            <div class="work-text">
              <h3><?= $portfolio_project3; ?></h3>
              <span class="category"><?= $portfolio_desc3; ?></span>
            </div>
            <img src="<?= base_url('theme/images/') . $portfolio_image3; ?>" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="<?= base_url('theme/images/') . $portfolio_image4; ?>" data-fancybox="gallery">
            <div class="work-text">
              <h3><?= $portfolio_project4; ?></h3>
              <span class="category"><?= $portfolio_desc4; ?></span>
            </div>
            <img src="<?= base_url('theme/images/') . $portfolio_image4; ?>" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="<?= base_url('theme/images/') . $portfolio_image5; ?>" data-fancybox="gallery">
            <div class="work-text">
              <h3><?= $portfolio_project5; ?></h3>
              <span class="category"><?= $portfolio_desc5; ?></span>
            </div>
            <img src="<?= base_url('theme/images/') . $portfolio_image5; ?>" alt="Image" class="img-fluid">
          </a>
      </div>
    
    </div>    

    <!-- ARTICLES -->
    <div class="pricing-wrap bg-primary pricing-counter" id="articles-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <h2 class="section-title mb-3 text-center text-white mx-auto"><?= $reason_title; ?></h2>
            <p class="mb-5 section-desc"><?= $reason_subtitle; ?></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4">
          <div class="pricing">
            <h3><?= $reason_why1; ?></h3>
            <!-- <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="price">
              <!-- <span>Starting at</span>
              <strong>$<em class="number" data-number="7">0</em></strong>
              <span>Per Month</span> -->
            </div>
            <p class="description-2 mb-5"><?= $reason_how1; ?></p>
            <p><a href="https://www.atmago.com/berita-warga/kompilasi-dan-pelajari-data-aki-akb-lkts-sambangi-sejumlah-opd-pemkab-boyolali_af4a6e39-093d-4b51-a4fe-0a2252aecda9" target="_blank" class="btn btn-outline-primary py-3 px-5">Read more</a></p>
            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing pricing-popular">
            <h3><?= $reason_why2; ?></h3>
            <!-- <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="price">
              <!-- <span>Starting at</span>
              <strong>$<em class="number" data-number="75">0</em></strong>
              <span>Per Month</span> -->
            </div>
            <p class="description-2 mb-5"><?= $reason_how2; ?></p>
            <p><a href="https://www.atmago.com/berita-warga/formmad-warna-baru-kegiatan-oms-di-boyolali_7971a85f-03a3-430d-8a04-7613f7c7e2b5" target="_blank" class="btn  btn-outline-danger py-3 px-5">Read more</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing">
            <h3><?= $reason_why3; ?></h3>
            <!-- <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="price">
              <!-- <span>Starting at aaaaa aaa aaaa aaaa</span>
              <strong>$<em class="number" data-number="390">0</em></strong>
              <span>Per Month</span> -->
            </div>
            <p class="description-2 mb-5"><?= $reason_how3; ?></p>
            <p><a href="https://www.atmago.com/berita-warga/kick-off-learning-forum-kabupaten-boyolali_922af0ee-db36-4819-b0ab-32b2f8582e6e" target="_blank" class="btn btn-outline-primary py-3 px-5">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section"  data-aos="fade">
      <div class="container">
        <a href="https://www.youtube.com/watch?v=dVYS-sMbO04" class="video-img-bg" data-fancybox data-ratio="2">
          <span class="play-button">
            <span class="icon-play"></span>
          </span>
          <img src="<?= base_url ('theme/images/video_lk.jpg'); ?>" alt="Image" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="site-section" id="contact-section"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
            <img src="<?= base_url ('theme/images/about_x.jpg'); ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 mr-auto order-2 order-md-1">
            <h2 class="section-title mb-3">Contact Us</h2>
            <p class="mb-5">Jika anda tertarik untuk bekerjasama dan melakukan aktifitas sosial bersama, silahkan hubungi kami melalui kontak berikut.</p>

            <?= $this->session->flashdata('msg'); ?>
            <form method="post" action="<?= site_url('contact/send'); ?>" class="contact-form">
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Full name" maxlength="50" required="">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" maxlength="50" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" maxlength="100" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Write your message here." maxlength="400" required=""></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6"> 
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Us</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="tel:+62276325658" class="pl-3 pr-3"><span class="icon-phone"></span>&nbsp &nbsp +62 276325658</a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+6285641447144" class="pl-3 pr-3"><span class="icon-whatsapp"></span>&nbsp &nbsp +62 85641447144</a></li>
              <li><a href="mailto:information@lkts.org " class="pl-3 pr-3"><span class="icon-envelope"></span>&nbsp &nbsp information@lkts.org </a></li>
              <li><a href="http://instagram.com/lktsofficial" class="pl-3 pr-3"><span class="icon-instagram"></span>&nbsp &nbsp @lktsofficial</a></li>
              <li><a href="http://twitter.com/lktsofficial" class="pl-3 pr-3"><span class="icon-twitter"></span>&nbsp &nbsp lktsofficial</a></li>
              <!-- <li><a href="http://facebook.com/lkts.indonesia" class="pl-3 pr-3"><span class="icon-facebook"></span>&nbsp &nbsp lktsindonesia</a></li> -->
            </ul>
            <!-- <p>Telpon</p> -->
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="smoothscroll">Home</a></li>
              <li><a href="#about-section" class="smoothscroll">About</a></li>
              <li><a href="#teams-section" class="smoothscroll">Teams</a></li>
              <li><a href="#services-section" class="smoothscroll">Services</a></li>
              <li><a href="#gallery-section" class="smoothscroll">Projects</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>MAPS</h3>
            <p>Visit our office via maps</p>
            <form action="#">
              <div class="d-flex mb-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3709870759462!2d110.59452451477655!3d-7.534454894565935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6eb437e20ee5%3A0x699428c6ae8ceda3!2sInstitute%20for%20Social%20Transformation%20Studies!5e0!3m2!1sid!2sid!4v1613359588762!5m2!1sid!2sid" width="380" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </form>
          </div>
          <!-- <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Apakah kamu tertarik untuk mengikuti informasi seputar LKTS?</p>
            <form action="#">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div> -->

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            &copy; LKTS <script>document.write(new Date().getFullYear());</script> <br> Build with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://jowokode.com" target="_blank" >Jowokode</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="<?= base_url('theme/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery-ui.js'); ?>"></script>
  <script src="<?= base_url('theme/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?= base_url('theme/js/aos.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery.fancybox.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery.animateNumber.min.js'); ?>"></script>
  <script src="<?= base_url('theme/js/jquery.sticky.js'); ?>"></script>
  <script src="<?= base_url('theme/js/main.js'); ?>"></script>
    
  </body>
</html>