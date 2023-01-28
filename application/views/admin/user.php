<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
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
<!-- End of Main Content -->