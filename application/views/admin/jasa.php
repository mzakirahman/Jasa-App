<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Jasa elektronik</h1>
  <div class="row">
    <?php foreach ($alljasa as $jasa) : ?>
      <div class="col-lg-3 mb-3">

      
        <div class="card">
          <img height="200" src="<?= base_url('assets/picture/') . $jasa['foto']; ?>" class="card-img-top">
          <div class="card-body">
            <p class="card-text font-weight-bold"><?= $jasa['juduljasa']; ?></p>
            <p class="card-text"> Pemilik : <?= $jasa['nama']; ?></p>
            <p class="card-text"> Kontak : <?= $jasa['no']; ?></p>
            <p class="card-text"> Lokasi : <?= $jasa['alamat']; ?></p>
            <a href="hapusjasa/<?= $jasa['id']; ?>" class="badge badge-danger text-right" onclick="return confirm('Yakin menghapus jasa?');">Delete</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
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
          Yakin di hapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End of Main Content -->