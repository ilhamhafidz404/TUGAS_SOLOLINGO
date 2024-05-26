<?= $this->extend('admin/layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>User</h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-primary">Tambah User</button>
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
<?= $this->endSection() ?>