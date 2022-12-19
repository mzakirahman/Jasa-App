<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  <?= $this->session->flashdata('message'); ?>
                  <input class="form-control mb-3" type="text" placeholder="<?= $this->session->userdata('reset_email'); ?>" readonly>
                </div>


                <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter new password...">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat password...">
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <button type="submit" class=" site-btn btn-user btn-block">
                    Reset Password
                  </button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>