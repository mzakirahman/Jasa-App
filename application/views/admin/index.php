<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg">

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Profile</th>
            <th scope="col">Role</th>
            <th scope="col">Aktif | Non</th>
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
                <?php
                if ($user['is_active'] == 1) {
                  echo 'Aktif';
                } else {
                  echo 'Non Aktif';
                }
                ?>
              </td>
              <td>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>


    </div>
  </div>
</div>
<!-- /.container-fluid -->
<!-- modal edit  -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
<!-- End of Main Content -->