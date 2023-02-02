    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://4.bp.blogspot.com/-aFNmnv6CXlI/WwcPNu8o2jI/AAAAAAAACp4/j8-YK2ou49YcMvz0GP95JedViOfdrUg1QCLcBGAs/s1600/se4.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Jasa Elektronik</h2>
              <div class="breadcrumb__option">
                <a href="<?= base_url('home') ?>">Home</a>
                <span>Jasa</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--content -->
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
                  <p class="card-text mt-1"><?= $j['nama']; ?></p>
                  <a href="<?= base_url('auth'); ?>" class="primary-btn mt-1">Pesan</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>


        </div>
      </div>
    </section>
    <!--content -->


    <!-- Blog Section Begin -->
    <section class="from-blog spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title from-blog__title">
              <h2>From The Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <img src="https://4.bp.blogspot.com/-aFNmnv6CXlI/WwcPNu8o2jI/AAAAAAAACp4/j8-YK2ou49YcMvz0GP95JedViOfdrUg1QCLcBGAs/s1600/se4.jpg" alt="">
              </div>
              <div class="blog__item__text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                  <li><i class="fa fa-comment-o"></i> 5</li>
                </ul>
                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <img src="https://4.bp.blogspot.com/-aFNmnv6CXlI/WwcPNu8o2jI/AAAAAAAACp4/j8-YK2ou49YcMvz0GP95JedViOfdrUg1QCLcBGAs/s1600/se4.jpg" alt="">
              </div>
              <div class="blog__item__text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                  <li><i class="fa fa-comment-o"></i> 5</li>
                </ul>
                <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <img src="https://4.bp.blogspot.com/-aFNmnv6CXlI/WwcPNu8o2jI/AAAAAAAACp4/j8-YK2ou49YcMvz0GP95JedViOfdrUg1QCLcBGAs/s1600/se4.jpg" alt="">
              </div>
              <div class="blog__item__text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                  <li><i class="fa fa-comment-o"></i> 5</li>
                </ul>
                <h5><a href="#">Visit the clean farm in the US</a></h5>
                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->