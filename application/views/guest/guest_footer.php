<!-- Footer Section Begin -->
<footer class="footer spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
          <div class="footer__about__logo">
            <a href="<?= base_url('./assets/logo.png') ?>"><img src="<?= base_url('assets/'); ?>logo.png" alt=""></a>
          </div>
          <ul>
            <li>Alamat: Bengkalis 28711</li>
            <li>Kontak: +628 1212 1313</li>
            <li>Email: jasaelektronik407@gmail.com</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Link</h6>
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li><a href="<?= base_url('home/jasa') ?>">Jasa</a></li>
            <li><a href="<?= base_url('home/help') ?>">Help</a></li>
            <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
          </ul>
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li><a href="<?= base_url('home/jasa') ?>">Jasa</a></li>
            <li><a href="<?= base_url('home/help') ?>">Help</a></li>
            <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Pesan</h6>
          <p>Sampaikan saran | Kritik dari sistem informasi</p>
          <form action="<?= base_url('home/contact');  ?>" method="post">
            <input type="text" placeholder="Saran...">
            <button type="submit" class="site-btn">Kirim</button>
          </form>
          <div class="footer__widget__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__copyright">
          <div class="footer__copyright__text">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | Jasa Kuy
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          <!-- <div class="footer__copyright__payment"><img src="<?= base_url('ui_assets/'); ?>img/payment-item.png" alt=""></div> -->
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?= base_url('ui_assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/mixitup.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/main.js"></script>



</body>

</html>