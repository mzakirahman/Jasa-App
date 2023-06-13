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
            <li>Email: my@jasa-elektronik.site</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Link</h6>
          <ul>
            <li><a href="<?= base_url('jasa/alljasa') ?>">Home</a></li>
            <li><a href="<?= base_url('user/jasa') ?>">Jasa</a></li>
            <li><a href="<?= base_url('user/help') ?>">Help</a></li>
            <li><a href="<?= base_url('user/contact') ?>">Contact</a></li>
          </ul>
          <ul>
            <li><a href="<?= base_url('jasaku/create') ?>">Daftar Jasa Elektronik</a></li>
            <li><a href="<?= base_url('jasaku/jasasaya') ?>">My Jasa</a></li>
            <li><a href="<?= base_url('user') ?>">Profile</a></li>
            <li><a href="<?= base_url('jasaku/transaksi') ?>">Transaksi</a></li>
            <li><a href="<?= base_url('jasaku/pemesanjasa') ?>">Pemesan My Jasa Elektronik</a></li>
            <li><a target="_blank" href="<?= base_url('api/users') ?>">API</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Pesan</h6>
          <p>Sampaikan saran | Kritik dari sistem informasi</p>
          <form action="<?= base_url('user/contact');  ?>" method="post">
            <input type="text" placeholder="Saran...">
            <button type="submit" class="site-btn">Kirim</button>
          </form>
          <div class="footer__widget__social">
          <a href="mailto:my@jasa-elektronik.site"><i class="fa fa-envelope"></i></a>
            <a href=""><i class="fa fa-ban"></i></a>
            <a href=""><i class="fa fa-ban"></i></a>
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
              </script> All rights reserved | Jasa elektronik </strong> | Time rendered in {elapsed_time} seconds.
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

<!-- script untuk menampilkan nama file saat memasukkan file  -->



<!-- Js Plugins -->
<script src="<?= base_url('ui_assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/mixitup.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('ui_assets/'); ?>js/main.js"></script>
<!-- mitrans -->
<!-- <script src="<?= base_url('ui_assets/'); ?>js/jquery.fancybox.pack.js"></script> -->



</body>
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });



  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }
    });

  });
</script>

</html>