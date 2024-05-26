<?= $this->extend('admin/layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>User</h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-primary" data-toggle="modal" data-target="#formUserModal">Tambah User</button>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>User Type</th>
                <th>Action</th>
              </tr>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img alt="image" src="<?php echo base_url('template/stisla/dist/assets/img/avatar/avatar-5.png') ?>" class="rounded-circle mr-3" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                      <?= $user["name"] ?>
                    </div>
                  </td>
                  <td class="align-middle">
                    <?= $user["username"] ?>
                  </td>
                  <td>
                    <?php if ($user["user_type_name"] == "student") :  ?>
                      <div class="badge badge-success">
                        <?= $user["user_type_name"] ?>
                      </div>
                    <?php else :  ?>
                      <div class="badge badge-warning">
                        <?= $user["user_type_name"] ?>
                      </div>
                    <?php endif;  ?>
                  </td>
                  <td><a href="#" class="btn btn-info">Detail</a></td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="formUserModal">
  <div class="modal-dialog" role="document">
    <form action="/register" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label>User Type</label>
            <select class="form-control" name="user_type">
              <option value="" hidden selected>Select User Type</option>
              <option value="1">Student</option>
              <option value="2">Teacher</option>
            </select>
          </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>