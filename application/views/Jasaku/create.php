<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <?= $this->session->flashdata('jasaberhasil'); ?>

  <form action="<?= base_url() ?>Jasaku/insertdata" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Jasa</label>
              <input type="text" class="form-control" name="juduljasa" id="juduljasa" placeholder="Judul Jasa" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Anda</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">No Hp / Whatsapp</label>
              <input type="number" class="form-control" name="no" id="nama" placeholder="08**********" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Harga</label>
              <input type="number" class="form-control" name="harga" id="nama" placeholder="Harga" required>
            </div>
          </div>
        </div>



        <div class="form-group">
          <label for="exampleFormControlInput1">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="nama" placeholder="Alamat" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi Jasa elektronik anda</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>" readonly>
        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Gambar Jasa elektronik</label>
          <input type="file" class="form-control-file" name="fotopost">
        </div>
        <div class="form-group align-items-end">
          <button class="site-btn">Create</button>
        </div>

      </div>
    </div>

    <?php echo form_close(); ?>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->