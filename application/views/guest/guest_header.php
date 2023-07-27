<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <meta name="description" content="Implementasi RESTFUL API Pada Aplikasi
  Layanan Jasa Perbaikan Alat Elektronik">
  <meta name="keywords" content="Implementasi REST API & Jasa Elektronik">
  <!-- icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/icon'); ?>/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="<?= base_url('assets/newicon'); ?>apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/icon'); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/icon'); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url('assets/icon'); ?>/site.webmanifest">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('ui_assets/'); ?>css/style.css" type="text/css">
</head>

<body>


  <!-- Humberger Begin -->
  <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
      <a href="<?= base_url('home/index') ?>"><img src="<?= base_url('assets/'); ?>logo.png"></a>
    </div>
    <div class="humberger__menu__widget">
      <div class="header__top__right__language">
        <div class="header__top__right__auth">
          <a href="<?= base_url('auth') ?>"><i class="fa fa-user"></i> Login</a>
        </div>
      </div>
      <div class="header__top__right__auth">
        <a href="<?= base_url('auth/registration') ?>"><i class="fa fa-sign-in"></i> Registration</a>
      </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
      <ul>
        <li><a href="<?= base_url('home') ?>">Home</a></li>
        <li><a href="<?= base_url('home/jasa') ?>">Jasa</a></li>
        <li><a href="<?= base_url('home/help') ?>">Help</a></li>
        <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
      </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <!-- <div class="header__top__right__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-gmail"></i></a>
    </div> -->
    <div class="humberger__menu__contact">
      <ul>
        <li><i class="fa fa-envelope"></i> my@jasa-elektronik.site</li>
        <li>Jasa Layanan Perbaikan Alat Elektronik</li>
      </ul>
    </div>
  </div>
  <!-- Humberger End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> my@jasa-elektronik.site</li>
                <li>Jasa Layanan Perbaikan Alat Elektronik</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="header__top__right">
              <!-- <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div> -->
              <div class="header__top__right__language">
                <div class="header__top__right__auth">
                  <a href="<?= base_url('auth') ?>"><i class="fa fa-user"></i> Login</a>
                </div>
              </div>
              <div class="header__top__right__auth">
                <a href="<?= base_url('auth/registration') ?>"><i class="fa fa-sign-in"></i> Registration</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a href="<?= base_url('home') ?>"><img src="<?= base_url('assets/'); ?>logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li><a href="<?= base_url('home') ?>">Home</a></li>
              <li><a href="<?= base_url('home/jasa') ?>">Jasa</a></li>
              <li><a href="<?= base_url('home/help') ?>">Help</a></li>
              <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Hero Section Begin -->
  <section class="hero hero-normal">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all">
              <i class="fa fa-bars"></i>
              <span>Menu</span>
            </div>
            <ul>
              <li><a href="<?= base_url('home') ?>">Home</a></li>
              <li><a href="<?= base_url('home/jasa') ?>">Jasa</a></li>
              <li><a href="<?= base_url('home/help') ?>">Help</a></li>
              <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              
              <form action="<?= base_url('home/jasa');?>" method="post">
                <div class="hero__search__categories">
                  Cari
                  <span class="fa fa-search"></span>
                </div>
                <input name="keyword" type="text" placeholder="Jasa elektronik. . ." autocomplate="off" >
                <button name="ksubmit" type="submit" class="site-btn">SEARCH</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>+628 1212 1313</h5>
                <span>Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->