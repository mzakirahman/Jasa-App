<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <a class="primary-btn" href="<?= base_url(); ?>jasaku/create">Tambah Jasa</a>
  <h1 class="h3 text-gray-800 mt-2 mb-2"><?= $judul; ?></h1>
  <!-- content  -->
  <div class="row row-cols-1 row-cols-md-3">
    <?php foreach ($jasaSaya as $sm) : ?>
      <div class="col mb-4">
        <div class="card">
          <img src="<?= base_url('assets/picture/') . $sm['foto']; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $sm['juduljasa']; ?></h5>
            <h5 class="card-title"><?= $sm['alamat']; ?></h5>
            <h5 class="card-title"><?= $sm['harga']; ?></h5>
            <p class="card-text"><?= $sm['nama']; ?></p>
            <a href="#" class="badge badge-warning">Edit</a>
            <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#exampleModal">Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- end content -->
  <style>
    .card-img-top {
      height: 180px;
    }
  </style>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Yakin untuk menghapus?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Hapus</button>
        </div>
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