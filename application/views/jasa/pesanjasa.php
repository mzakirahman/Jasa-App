<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">

<?php foreach ($pesanjasa as $ps) : ?>

<div class="card mb-3">
  <img src="<?= base_url('assets/picture/') . $ps['foto']; ?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?= $ps['nama']; ?></h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<?php endforeach; ?>
<style>
    .card-img-top {
      height: 250px;
    }
  </style>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->