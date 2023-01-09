<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <a class="primary-btn" href="<?= base_url(); ?>jasaku/create">Tambah Jasa</a>
  <h1 class="h3 text-gray-800 mt-2 mb-2"><?= $judul; ?></h1>

    <?php  
     if (!empty($jasa))
        {
          var_dump ($jasa);
        }
        else
        {
           echo '<div class="alert alert-warning" role="alert">
                    Anda Belum Mendaftar Jasa!</div>';
        }
    ?>
</div>



</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->