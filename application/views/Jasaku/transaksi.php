<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <h1 class="h3 text-gray-800"><?= $judul; ?></h1>
  <?php if ($this->session->flashdata('bayar')) : ?>
  <?php endif; ?>
  <div class="table-responsive">

    <table id="example" class="table table-striped table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pemesan</th>
          <th scope="col">Biaya</th>
          <th scope="col">Nama Penjasa</th>
          <th scope="col">Type Transfer</th>
          <th scope="col">Number Transfer</th>
          <th scope="col">Status</th>
          <th scope="col">Struk Transfer</th>
          <th scope="col">Detail Penjasa</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($transaksi as $ts) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td><?= $ts['namapemesan']; ?></td>
            <td>Rp. <?= $ts['gross_amount']; ?></td>
            <td><?= $ts['nama']; ?></td>
            <td>
              <p class="text-uppercase"><?= $ts['bank']; ?></p>
            </td>
            <td><?= $ts['va_number']; ?></td>
            <td>
              <?php
              if ($ts['status_code'] == 200) {
                echo '<span class="badge badge-pill badge-success">Oke</span>';
              } else {
                echo '<span class="badge badge-pill badge-warning">Belum Bayar</span>';
              }
              ?>
            </td>
            <td><a href="<?= $ts['pdf_url'];  ?>" target="_blank" class="badge badge-success">Download</a></td>
            <td><a href="<?= base_url('jasa/pesanjasa/') . $ts['unikjasa'];  ?>"><span class="badge badge-info">Detail</span></a></td>
          </tr>
          <?php $i++; ?>

        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->