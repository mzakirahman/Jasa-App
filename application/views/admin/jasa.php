<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
<?php foreach ($alljasa as $jasa) : ?>
<div class="card m-3" style="width: 18rem;">
  <img height="200" src="<?= base_url('assets/picture/') . $jasa['foto']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?= $jasa['juduljasa']; ?></p>
    <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#exampleModal">Hapus</a>
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