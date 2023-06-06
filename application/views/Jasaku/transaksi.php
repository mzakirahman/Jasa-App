<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <h1 class="h3 text-gray-800"><?= $judul; ?></h1>
  <?php if ($this->session->flashdata('bayar')) : ?>
  <?php endif; ?>
  <div class="table-responsive">

    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Order ID</th>
          <th scope="col">Biaya</th>
          <th scope="col">Bank</th>
          <th scope="col">Number</th>
          <th scope="col">Status</th>
          <th scope="col">Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transaksi as $ts) : ?>
          <tr>
            <td><?= $ts['nama']; ?></td>
            <td><?= $ts['order_id']; ?></td>
            <td>Rp. <?= $ts['gross_amount']; ?></td>
            <!-- <td><?= $ts['payment_type']; ?></td> -->
            <!-- <td><?= $ts['transaction_time']; ?></td> -->
            <td><?= $ts['bank']; ?></td>
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
          </tr>
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