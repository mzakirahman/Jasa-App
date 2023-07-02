<!-- Loading screen -->
<div id="preloder">
  <div class="loader"></div>
</div>
<!-- CONTENT START -->
<div class="col-lg-6">
  <!-- <?= $this->session->flashdata('message'); ?> -->

  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="">
    <form action="<?= base_url('user/gantipassword'); ?>" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Password Saat Ini</label>
        <input type="password" class="form-control" id="current_password" name="current_password">
      </div>
      <div class="form-group">
        <label for="new_password1">Password Baru</label>
        <input type="password" class="form-control" id="new_password1" name="new_password1">
        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="new_password1">Konfirmasi Password</label>
        <input type="password" class="form-control" id="new_password2" name="new_password2">
        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Ganti Password</button>
      </div>

    </form>
  </div>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->