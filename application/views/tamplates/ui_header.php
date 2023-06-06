<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <!-- icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/icon'); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/icon'); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/icon'); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url('assets/icon'); ?>/site.webmanifest">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
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
      <a href="<?= base_url('jasa/alljasa') ?>"><img src="<?= base_url('assets/'); ?>logo.png"></a>
    </div>
    <div class="humberger__menu__cart">
    </div>
    <div class="humberger__menu__widget">
      <div class="header__top__right__language">
        <span class="fa fa-user"></span>
        <div>Hi, <?= $user['name'] ?></div>
      </div>
      <div class="header__top__right__auth">
        <a href="" data-toggle="modal" data-target="#exampleModalCenter"><span>Log Out</span>
          <span class="fa fa-sign-out"></span></a>
      </div>

    </div>
    <nav class="humberger__menu__nav mobile-menu">
      <ul>
        <li><a href="<?= base_url('alljasa'); ?>">Home</a></li>
        <li><a href="<?= base_url('user/jasa'); ?>">Jasa</a></li>
        <li><a href="<?= base_url('user/help'); ?>">Help</a></li>
        <li><a href="<?= base_url('user/contact'); ?>">Contact</a></li>
      </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <!-- <div class="header__top__right__social">
      <a href="#"><i class="fa fa-email"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div> -->
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
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> jasaelektronik407@gmail.com</li>
                <li>Jasa Layanan Perbaikan Alat Elektronik</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header__top__right">
              <!-- <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div> -->


              <div class="header__top__right__language">
                <div class="header__top__right__auth">
                  <a href=""><i class="fa fa-user"></i> Hi, <?= $user['name'] ?></a>
                </div>
              </div>
              <div class="header__top__right__auth">
                <a href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-in"></i> Log Out</a>
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
            <a href="<?= base_url('jasa/alljasa') ?>"><img src="<?= base_url('assets/logo.png'); ?>" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li><a href="<?= base_url('jasa/alljasa'); ?>">Home</a></li>
              <li><a href="<?= base_url('user/jasa'); ?>">Jasa</a></li>
              <li><a href="<?= base_url('user/help'); ?>">Help</a></li>
              <li><a href="<?= base_url('user/contact'); ?>">Contact</a></li>
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
              <li><a href="<?= base_url('jasa/alljasa'); ?>">Home</a></li>
              <li><a href="<?= base_url('user/jasa'); ?>">Jasa</a></li>
              <li><a href="<?= base_url('user/help'); ?>">Help</a></li>
              <li><a href="<?= base_url('user/contact'); ?>">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <div class="hero__search__categories">
                  Cari
                  <span class="arrow_carrot-down"></span>
                </div>
                <input type="text" placeholder="Jasa elektronik...">
                <button type="submit" class="site-btn">SEARCH</button>
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

  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Yakin Untuk Logout
        </div>
        <div class="modal-footer">

          <a class="primary-btn" href="<?= base_url('auth/logout') ?>">Logout</a>

        </div>
      </div>
    </div>
  </div>
  <!-- Hero Section End -->