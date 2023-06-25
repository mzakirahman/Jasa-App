<div class="col-lg-9 col-md-7">

  <h1 class="h3 text-gray-800"><?= $judul; ?></h1>

  <div class="table-responsive">

    <table id="example" class="table table-striped table-bordered">
      <thead class="thead-light">

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pemesan</th>
          <th scope="col">Kontak Pemesan</th>
          <th scope="col">Jenis Kerusakan</th>
          <th scope="col">Alamat Pemesan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($pesanjasa as $ts) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td><?= $ts['namapemesan']; ?></td>
            <td><?= $ts['nohp']; ?></td>
            <td><?= $ts['jeniskerusakan']; ?></td>
            <td><?= $ts['alamat']; ?></td>
            <td>
              <?php
              if ($ts['status_code'] == 200) {
                echo '<span class="badge badge-pill badge-success">Oke</span>';
              } else {
                echo '<span class="badge badge-pill badge-warning">Belum Bayar</span>';
              }
              ?>
            </td>

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