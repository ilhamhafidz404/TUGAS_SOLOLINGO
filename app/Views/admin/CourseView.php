<?= $this->extend('admin/layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Courses</h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-primary" data-toggle="modal" data-target="#formConfirmTotalQuestion">Add Course</button>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Action</th>
              </tr>
              <?php foreach ($courses as $course) : ?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <?= $course["title"] ?>
                    </div>
                  </td>
                  <td>
                    <?= $course["description"] ?>
                  </td>
                  <td>

                    <?= $course["created_by"] ?>
                  </td>
                  <td>
                    <a href="/admin/courses/detail?slug=<?= $course['slug'] ?>" class="btn btn-info">
                      Detail
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="formConfirmTotalQuestion">
  <div class="modal-dialog" role="document">
    <form action="/admin/courses" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label>description</label>
            <textarea name="description" class="form-control"></textarea>
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