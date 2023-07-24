<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="table-responsive-lg">

    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Profile</th>
          <th scope="col">Role</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($user as $user) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><img height="30" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt=""></td>
            <td>
              <?php
              if ($user['role_id'] == 1) {
                echo 'Admin';
              } else {
                echo 'User';
              }
              ?>
            </td>
            <td>
              <a href="hapususer/<?= $user['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin menghapus <?= $user['name']; ?>?');">Delete</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
</div>
<!-- End of Main Content -->