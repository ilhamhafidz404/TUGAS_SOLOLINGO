<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <h2 class="section-title"><?= $course["title"] ?></h2>
      <p class="section-lead">
        <?= $course["description"] ?>
      </p>

      <?php foreach ($questions as $question) : ?>
        <div class="card">
          <div class="card-header">
            <h4><?= $question["question"] ?></h4>
          </div>
          <div class="card-body">
            <ol type="a">
              <li><?= $question["a"] ?></li>
              <li><?= $question["b"] ?></li>
              <li><?= $question["c"] ?></li>
              <li><?= $question["d"] ?></li>
            </ol>
          </div>
          <div class="card-footer bg-whitesmoke">Correct Anser is : <?= $question["correct"] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalFromAddQuestion">
  <div class="modal-dialog" role="document">
    <form action="/admin/questions" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input name="course_id" type="hidden" value="<?= $course['id'] ?>" class="form-control" />
          </div>
          <div class="form-group">
            <label>Question</label>
            <textarea name="question" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Opsi a</label>
            <textarea name="a" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Opsi b</label>
            <textarea name="b" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Opsi c</label>
            <textarea name="c" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Opsi d</label>
            <textarea name="d" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label class="form-label">Correct Answer</label>
            <div class="selectgroup w-100">
              <label class="selectgroup-item">
                <input type="radio" name="correct" value="a" class="selectgroup-input">
                <span class="selectgroup-button">A</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="correct" value="b" class="selectgroup-input">
                <span class="selectgroup-button">B</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="correct" value="c" class="selectgroup-input">
                <span class="selectgroup-button">C</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="correct" value="d" class="selectgroup-input">
                <span class="selectgroup-button">D</span>
              </label>
            </div>
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