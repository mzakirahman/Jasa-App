<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <table id="example" class="table table-striped table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">Order Id</th>
        <th scope="col">Pemesan Jasa</th>
        <th scope="col">Nama Penjasa</th>
        <th scope="col">Biaya</th>
        <th scope="col">Bank</th>
        <th scope="col">Number</th>
        <th scope="col">Status</th>
        <th scope="col">Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alltransaksi as $ts) : ?>
        <tr>
          <td><?= $ts['order_id']; ?></td>
          <td><?= $ts['namapemesan']; ?></td>
          <td><?= $ts['nama']; ?></td>
          <td>Rp. <?= $ts['gross_amount']; ?></td>
          <td><?= $ts['bank']; ?></td>
          <td><?= $ts['va_number']; ?></td>
          <td>
            <?php
            if ($ts['status_code'] == 200) {
              echo '<span class="badge badge-pill badge-success">Ok</span>';
            } else {
              echo '<span class="badge badge-pill badge-warning">Pending</span>';
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
<!-- End of Main Content -->