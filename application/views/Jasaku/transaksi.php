<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
  <?php  if ( $this->session->flashdata('bayar')) : ?>
  <?php endif; ?>

  <table class="table table-hover">
    <thead class="thead-light">
    <?php foreach ($transaksi as $ts) : ?>
        <?php $i = 1; ?>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th> 
      <!-- <th scope="col">Order ID</th> -->
      <th scope="col">Biaya</th>
      <th scope="col">Via</th>
      <!-- <th scope="col">Waktu</th> -->
      <th scope="col">Bank</th>
      <th scope="col">Number</th>
      <th scope="col">Download</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
			
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $ts['nama']; ?></td>
        <!-- <td><?= $ts['order_id']; ?></td> -->
        <td>Rp. <?= $ts['gross_amount']; ?></td>
        <td><?= $ts['payment_type']; ?></td>
        <!-- <td><?= $ts['transaction_time']; ?></td> -->
        <td><?= $ts['bank']; ?></td>
        <td><?= $ts['va_number']; ?></td>
        <td><a href="<?= $ts['pdf_url'];  ?>" target="_blank"class="badge badge-success">Download</a></td>
        <td>
                <?php
                  if ($ts['status_code'] == 200) {
                    echo '<span class="badge badge-pill badge-success">Warning</span>';
                  } else {
                    echo '<span class="badge badge-pill badge-warning">Pending</span>';
                  }
                ?>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>



  

</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->