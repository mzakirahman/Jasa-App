<!-- Loading screen -->
<div id="preloder">
  <div class="loader"></div>
</div>
<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <div class="card mb-3 col-lg-8">
    <div class="row no-gutters">

      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name']; ?></h5>
          <p class="card-text"><?= $user['email']; ?></p>
          <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
          <a class="btn btn-primary" href="<?= base_url(); ?>user/edit" role="button">Edit</a>
          <a class="btn btn-primary" href="<?= base_url(); ?>user/gantipassword" role="button">Ganti Password</a>

        </div>
      </div>
    </div>
  </div>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->