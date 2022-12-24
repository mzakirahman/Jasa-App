<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <form action="" method="post">
    <div class="card">
      <div class="card-header">
        <h2 class="h3 text-gray-800"><?= $judul; ?></h2>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">No Hp</label>
              <input type="number" name="no-hp" class="form-control" placeholder="No Hp">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Lengkap</label>
              <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Jasa</label>
              <input type="text" name="nama_jasa" class="form-control" placeholder="Nama Judul Jasa Anda">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Jasa Anda</label>
              <input type="number" name="harga" class="form-control" placeholder="Harga Jasa Anda">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Deskripsi Jasa</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>

        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Gambar Jasa Anda</label>
          <input type="file" class="form-control-file" name="img_jasa" id="img_jasa">
        </div>

        <button type="submit" name="tambahjasa" class="site-btn float-right">Tambah Jasa</button>
      </div>
    </div>
  </form>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->