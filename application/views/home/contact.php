    <!-- Breadcrumb Section Begin -->
    <div class="container">
      <?php if( $this->session->flashdata('pesan')) :?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Berhasil </strong><?= $this->session->flashdata('pesan');?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>
      </div>

    <!-- end flash data -->
    <section class="breadcrumb-section set-bg" data-setbg="https://4.bp.blogspot.com/-aFNmnv6CXlI/WwcPNu8o2jI/AAAAAAAACp4/j8-YK2ou49YcMvz0GP95JedViOfdrUg1QCLcBGAs/s1600/se4.jpg">
      <div class="container">

        

        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Jasa Elektronik</h2>
              <div class="breadcrumb__option">
                <a href="<?= base_url('home') ?>">Home</a>
                <span>Contact</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- contact -->
    <!-- Contact Section Begin -->
    <section class="contact spad">
      <div class="container">
      
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_phone"></span>
              <h4>Kontak</h4>
              <p>+62822-8888-1111</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_pin_alt"></span>
              <h4>Lokasi</h4>
              <p>Bengkalis</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_clock_alt"></span>
              <h4>Waktu</h4>
              <p>24 Jam Support</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_mail_alt"></span>
              <h4>Email</h4>
              <p>jasaelektronik407@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021030.0259871961!2d102.2143326920027!3d1.528567706789686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d3e3d31c50686d%3A0x3039d80b220cde0!2sKabupaten%20Bengkalis%2C%20Riau!5e0!3m2!1sid!2sid!4v1673024554506!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
          <h4>Bengkalis</h4>
          <ul>
            <li>Kontak: +62822-8888-1111</li>
            <li>Lokasi: Bengkalis</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Map End -->



    <!-- Contact Form Begin -->
    <div class="contact-form spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact__form__title">
              <h2>Pesan</h2>
            </div>
          </div>
        </div>
        <form action="" method="post">
          <div class="row">
            
              <div class="col-lg-6 col-md-6">
              <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                <input type="text" placeholder="Nama" name="nama">
              </div>
              <div class="col-lg-6 col-md-6">
              <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                <input type="text" placeholder="Email" name="email">
              </div>
              <div class="col-lg-12 ">
                <?= form_error('pesan', '<small class="text-danger mt-1 ">', '</small>'); ?>
                <textarea placeholder="Pesan" name="pesan"></textarea>
                <button type="simpan" class="site-btn float-right">Kirim</button>
              </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Contact Form End -->