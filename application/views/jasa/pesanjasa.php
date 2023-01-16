<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <p><a href="#" class="text-dark">jasa elektronik > </a><a href="#" class="text-primary">Detail Jasa</a>
  <div class="row row-cols-2">
    <div class="col">
      <img class="img-fluid" width="100%" height="80%" src="<?= base_url('assets/picture/') . $jasa['foto']; ?>">
    </div>
    <div class="col">
      <h3><b><?= $jasa['juduljasa']; ?></b></h3>
      <h5 class="mt-3">Rp. <?= $jasa['harga']; ?></h5>
      <h5 class="mt-3"> <?= $jasa['nama']; ?></h5>
      <h5 class="mt-3"> <i class="fa fa-whatsapp" aria-hidden="true"></i>
        <?= $jasa['no']; ?></h5>
      <h5 class="mt-3"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
        <?= $jasa['alamat']; ?></h5>
      <p class="text-secondary"><?= $jasa['deskripsi']; ?></p>
      <button class="site-btn mt-3">Pesan Jasa</button>
    </div>
  </div>
  <!-- Product Details Section End -->




</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->