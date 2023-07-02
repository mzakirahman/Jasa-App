<!-- Loading screen -->
<div id="preloder">
  <div class="loader"></div>
</div>
<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">

  <!-- header link -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>


  <div class="row row-cols-1 row-cols-md-3">
    <?php foreach ($jasa as $j) : ?>
      <div class="col mb-4">
        <div class="card h-100" style="width: 18rem;">
          <img src="<?= base_url('assets/picture/') . $j['foto']; ?>" class="card-img-top" style="height:180px">
          <div class="card-body">
            <h5 class="card-title"><?= $j['juduljasa']; ?></h5>
            <h5 class="card-text">Rp. <?= $j['harga']; ?></h5>
            <h6 class=" card-text fa fa-map-marker mb-2"> <?= $j['alamat']; ?></h6><br>
            <td>
              <a href="<?= base_url('jasa/pesanjasa/') . $j['id']; ?>"><button type="button" class="btn btn-success">Pesan</button></a>
            </td>
          </div>
          <div class="card-footer">
            <small class="text-muted">Update <?= $j['date']; ?></small>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


</div>
</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->