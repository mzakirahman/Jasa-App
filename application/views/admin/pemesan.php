<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pemesan Jasa</th>
        <th scope="col">Nama Penjasa</th>
        <th scope="col">Alamat Pemesan</th>
        <th scope="col">Jenis Kerusakan</th>
        <th scope="col">Biaya</th>
        <th scope="col">Status</th>
        <th scope="col">Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alltransaksi as $ts) : ?>
        <?php $i = 1; ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $ts['namapemesan']; ?></td>
          <td><?= $ts['nama']; ?></td>
          <td><?= $ts['alamat']; ?></td>
          <td><?= $ts['jeniskerusakan']; ?></td>
          <td>Rp. <?= $ts['gross_amount']; ?></td>
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
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
<!-- End of Main Content -->