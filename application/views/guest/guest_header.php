<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title; ?></title>

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
      <a href="<?= base_url('home/index') ?>"><img src="<?= base_url('ui_assets/'); ?>img/logo.png"></a>
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
    <div class="header__top__right__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
      <ul>
        <li><i class="fa fa-envelope"></i> jasaelektronik407@gmail.com</li>
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
                <li><i class="fa fa-envelope"></i> jasaelektronik407@gmail.com</li>
                <li>Jasa Layanan Perbaikan Alat Elektronik</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="header__top__right">
              <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div>
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
            <a href="<?= base_url('home') ?>"><img src="<?= base_url('ui_assets/'); ?>img/logo.png" alt=""></a>
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
              <span>All Jasa elektronik</span>
            </div>
            <ul>
              <li><a href="#">Fresh Meat</a></li>
              <li><a href="#">Vegetables</a></li>
              <li><a href="#">Fruit & Nut Gifts</a></li>
              <li><a href="#">Fresh Berries</a></li>
              <li><a href="#">Ocean Foods</a></li>
              <li><a href="#">Butter & Eggs</a></li>
              <li><a href="#">Fastfood</a></li>
              <li><a href="#">Fresh Onion</a></li>
              <li><a href="#">Papayaya & Crisps</a></li>
              <li><a href="#">Oatmeal</a></li>
              <li><a href="#">Fresh Bananas</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <div class="hero__search__categories">
                  All Jasa elektronik
                  <span class="arrow_carrot-down"></span>
                </div>
                <input type="text" placeholder="Jasa elektronik apa?">
                <button type="submit" class="site-btn">SEARCH</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>+65 11.188.888</h5>
                <span>Support 24/7 Admin</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->