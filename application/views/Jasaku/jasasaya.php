<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <a class="primary-btn" href="<?= base_url(); ?>jasaku/create">Tambah Jasa</a>
  <h1 class="h3 text-gray-800 mt-2 mb-2"><?= $judul; ?></h1>
  <!-- var_dump ($jasaSaya); -->
  <h3>id user yang login di table user <?= $user['id']; ?></h3>
  <?php print_r($jasaSaya);?>


  <?php foreach ($jasaSaya as $sm) : ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/picture/') . $sm['foto']; ?>" class="card-img" >
      </div>
      <div class="col-md-8">
        <div class="card-body m-1">
          <h5 class="card-title"><?= $sm['juduljasa']; ?></h5>
          <!-- <p class="card-text"><?= $sm['nama']; ?></p> -->
          <h3 class="card-text">user_id di table jasa <?= $sm['user_id']; ?></h3>
          <!-- <p class="card-text"><?= $sm['no']; ?></p> -->
          <!-- <p class="card-text"><small class="text-muted">Last updated <?= $sm['date']; ?></small></p> -->
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>


          
</div>




</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->