<!-- Hero Section Begin -->

<!-- Loading screen -->
<div id="preloder">
  <div class="loader"></div>
</div>


<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero__item set-bg" data-setbg="https://betanews.id/wp-content/uploads/2020/04/20200331_BETA_RS_SERVICE-ELEKTRONIK-2.jpg">
          <div class="hero__text">
            <h2>Jasa <br />Elektronik</h2>
            <a href="<?= base_url('auth'); ?>" class="primary-btn">Jasa Sekarang!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Jasa elektronik</h2>
        </div>
        <div class="featured__controls">
        </div>
      </div>
    </div>

    <style>
      .card-img-top {
        height: 190px;
      }
    </style>
    <div class="row row-cols-1 row-cols-md-3">
      <?php foreach ($jasa  as $j) : ?>
        <div class="col mb-4">
          <div class="card">
            <img src="<?= base_url('assets/picture/') . $j['foto']; ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title mt-2"><?= $j['juduljasa']; ?></h5>
              <h5 class="card-title mt-1">Rp. <?= $j['harga']; ?></h5>
              <p class="card-text mt-1"><?= $j['alamat']; ?></p>
              <a href="<?= base_url('auth'); ?>" class="primary-btn mt-1">Pesan</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


    </div>


    <?=  $this->pagination->create_links(); ?>

  </div>
</section>
<!-- Featured Section End -->