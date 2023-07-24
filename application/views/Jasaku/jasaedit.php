<!-- Loading screen -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">


  <form action="<?= base_url() ?>Jasaku/edittdata" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <h1 class="h3 text-gray-800"><?= $judul; ?></h1>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Jasa</label>
              <input type="text" value="<?= $edit['juduljasa'] ?>" class="form-control" name="juduljasa" id="juduljasa" placeholder="Judul Jasa" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Anda</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" value="<?= $user['name'] ?>" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">No Hp / Whatsapp</label>
              <input value="<?= $edit['no'] ?>" type="number" class="form-control" name="no" id="nama" placeholder="08**********" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleFormControlInput1">Harga</label>
              <input value="<?= $edit['harga'] ?>" type="number" class="form-control" name="harga" id="nama" placeholder="Harga" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Alamat</label>
          <input value="<?= $edit['alamat'] ?>" type="text" class="form-control" name="alamat" id="nama" placeholder="Alamat" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi Jasa elektronik anda</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required><?= $edit['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Gambar Jasa elektronik</label>
          <!-- <input type="file" class="form-control-file" name="fotopost"> -->
          <!-- new -->
          <div class="custom-file">
            <!-- <img src="<?= base_url('assets/picture/') . $edit['foto']; ?>" class="img-thumbnail"> -->
            <input type="file" id="image" name="fotopost" class="custom-file-input">
            <label class="custom-file-label">Choose file...</label>
          </div>
        </div>
        <div class="form-group align-items-end">
          <a class="btn btn-primary" href="<?= base_url(); ?>jasaku/jasasaya" role="button">Kembali</a>
          <button class="btn btn-success" type="submit">Edit</button>
          <!-- <button class="site-btn">Edit</button> -->
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