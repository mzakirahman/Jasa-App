<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">

  <div class="row">
    <?php foreach ($jasa as $jasa) : ?>
      <div class="col-sm-4">
        <div class="card">
          <img src="<?= base_url('assets/img/jasa/') . $jasa['img_jasa']; ?>" class="card-img-top" width="">
          <div class="card-body">
            <h4 class="card-title"><?= $jasa['nama_jasa']; ?></h4>
            <h5 class="card-title">Rp. <?= $jasa['harga']; ?></h5>
            <h6> <i class="fa fa-map-marker" aria-hidden="true"> <?= $jasa['alamat']; ?></i>
            </h6>
            <button class="site-btn mt-3">Pesan Jasa</button>
          </div>
          <div class="card-footer">
            <small class="text-muted">Update : <?= $jasa['time']; ?></small>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- CONTENT END -->
</section>
<!-- Product Section End -->